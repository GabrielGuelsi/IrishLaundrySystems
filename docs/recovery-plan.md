# Irish Laundry Systems — Recovery Plan

Last reviewed: 2026-10-12 · Owner: João (developer)

What to do when irishlaundrysystems.com breaks, loses data or is compromised. Keep this file current whenever hosting, deploy or credentials change.

## 1. What runs where

| Piece | Where |
|---|---|
| Hosting | Plesk (LiteSpeed, PHP 8.4). TLS: Let's Encrypt, valid to 2026-12-17, renewed in Plesk. |
| Code | GitHub `GabrielGuelsi/IrishLaundrySystems`. Work on `JoaoMain` → PR → `main`. |
| Deploy | Plesk → Git, repo `laravel_dd4249`, branch `main` → **Deploy now** into `httpdocs/ILS/public`. |
| Laravel root (live) | `httpdocs/ILS/public` — holds the live `.env` (confirmed 2026-09-29). |
| Web root | `httpdocs/ILS/public/public` |
| Other domains on the Laravel root | `irishlaundrysystems.ie` and the Plesk preview domain (`dreamy-booth.79-170-242-9.plesk.page`) have **`httpdocs/ILS/public` (the Laravel root) as document root**, not `/public`. The root `.htaccess` (in Git since 2026-10-12) 301s every `.ie` URL to the same path on `.com` and answers 403 to `*.plesk.page`. **Never delete it or point another domain at that folder** — see incident 2026-10-12 in section 6. |
| Health check | `https://irishlaundrysystems.com/up` → 200 when the app boots. |
| Uptime monitoring | UptimeRobot (João's account), every 5 min: `ILS – app health` (`/up`) and `ILS – homepage` (`/`). Alerts by email. |
| Logs | `storage/logs/laravel*.log` (app), `storage/logs/security-*.log` (admin logins, 90 days). |

A second Plesk repo (`IrishLaundrySystems`) auto-deploys `main` to `/irishlaundrysystems.com`. It does not hold the live `.env`; confirm whether it is still needed.

**Not in Git — only on the server, must be backed up:**
- `.env` — all secrets (app key, database, mail, admin login, GA4 ID). Keep a copy in a password manager.
- The database — check `DB_CONNECTION` in `.env`. If `sqlite`, it is the file `database/database.sqlite` (enquiries and equipment live here). If `mysql`, it is in Plesk → Databases.
- `storage/app` — files uploaded in the admin (equipment images).
- `vendor/` — not backed up; rebuilt with `composer install`.

## 2. Backups

- Plesk → **Backup Manager** → **Schedule**: daily, full (files + databases), keep at least 14 days, store a copy **off the server** (remote FTP/S3/Google Drive).
- ⚠️ As of 2026-09-29, no scheduled backup has been confirmed.
- Every 3 months, restore the latest backup to a test subdomain to prove it works.

## 3. Runbooks

Run server commands in the Laravel root (`httpdocs/ILS/public`) via Plesk → SSH Terminal.

### A. Site down or showing an error
1. Open `/up`. If it is not 200, the app is not booting.
2. Read the newest `storage/logs/laravel*.log` for the error.
3. Common fixes: a recent deploy → see B · a broken `.env` edit → restore it from the password manager · missing `vendor/` → `composer install --no-dev --optimize-autoloader` · stale cache → `php artisan optimize:clear`.

### B. A deploy broke the site (rollback)
1. On GitHub, revert the bad commit (`git revert <sha>`), merge to `main`, then Plesk → Git → **Deploy now**.
2. After any deploy: `composer install --no-dev --optimize-autoloader` and `php artisan optimize:clear`.
3. If the deploy ran a migration that must be undone: back up the database first, then `php artisan migrate:rollback --step=1` (every migration has a `down()`).
4. If the code cannot be fixed quickly, restore the files from the last good backup (Backup Manager → Restore → files only).

### C. Data lost or corrupted
1. Plesk → Backup Manager → pick the last good backup → restore **databases** only (or, with SQLite, the file `database/database.sqlite`).
2. Enquiries are also emailed to the business when submitted, so recent leads can be re-entered from the inbox.

### D. Suspected break-in or leaked credentials
1. Signs: many `Admin login failed` / `locked out` lines from unknown IPs in `security-*.log`, a login nobody recognises, unexpected page or file changes.
2. `php artisan down` (maintenance mode).
3. Rotate everything, updating `.env` each time:
   - Admin password: `php artisan admin:hash-password`, paste the result as `ADMIN_PASSWORD`.
   - Database password: Plesk → Databases → change password.
   - Mail password: at the mail provider.
   - App key: `php artisan key:generate --force` (logs everyone out; no data is encrypted with it today).
   - Plesk, GitHub and mail-account passwords, with two-factor turned on.
4. On GitHub, check collaborators and deploy keys; in Plesk, check users and scheduled tasks.
5. If files were changed, restore a backup from before the break-in (C), then redeploy (B).
6. `php artisan up`.
7. The database holds personal data (names, emails, phones). If it may have been accessed, tell ILS immediately: under GDPR Art. 33 a personal-data breach must be reported to the Irish Data Protection Commission within 72 hours, unless it is unlikely to put anyone at risk.

### E. Certificate expired
Plesk → SSL/TLS Certificates → renew the Let's Encrypt certificate and keep auto-renew on.

### F. Enquiries not arriving by email
Leads are saved in the database first — check `/admin/submissions`. Then check the mail settings in `.env` and the mail provider.

## 4. Contacts

| Role | Who |
|---|---|
| Developer | João |
| GitHub repo owner | Gabriel (`GabrielGuelsi`) |
| Business (ILS) | contact@irishlaundrysystems.com · +353 1 491 0402 |
| Hosting provider | hosting.ie — Plesk at `vega.hosting.ie:8443`, subscription BDG-DEV. _Support contact to fill in._ |
| Analytics | GA4 property "Irish Laundry Systems" (tag `G-STC85D8DE3`); `generate_lead` is a key event (2026-10-07). |

## 5. Open items (2026-09-29)

- [ ] Scheduled off-server backups (section 2) — not set up; this Plesk only offers FTP(S) as remote storage, so it needs an external FTP space. Owner decision, deferred (2026-10-07).
- [x] Redirect HTTP → HTTPS (Plesk → Hosting Settings → SSL/TLS support, 2026-10-07; http, www and https-www all 301 to https://irishlaundrysystems.com)
- [x] Delete `__phpinfo.php`, `phpcheck.php`, `icon-preview.html` from the web root (2026-10-07; icon-preview.html also removed from the repo)
- [x] Hashed `ADMIN_PASSWORD` in the live `.env` (2026-10-07, login confirmed)
- [ ] Confirm the deploy runs `composer install` — it does NOT: post-deployment actions are disabled on `laravel_dd4249`, so production `vendor/` is from the first install (Laravel 13.1.1 vs 13.34.0 in `composer.lock`). Accepted for now (2026-10-07); fix before adding any new composer package.
- [x] Uptime monitoring on `/up` (UptimeRobot, 2026-10-06)
- [ ] Fill in the hosting provider contact
- [x] `irishlaundrysystems.ie` consolidated into `.com` with page-by-page 301; app root no longer exposed (2026-10-12, section 6)
- [ ] GA4: mark `phone_click` and `email_click` as key events once they appear under Admin → Events → Recent events (sent and seen in Realtime 2026-10-12)
- [ ] Google Search Console: verify `irishlaundrysystems.com` as a Domain Property (DNS TXT), submit `/sitemap.xml`, add `.ie` and run Change of Address `.ie` → `.com`

## 6. Incident log

### 2026-10-12 — App root files public through irishlaundrysystems.ie

- **What:** `irishlaundrysystems.ie` (and the Plesk preview domain) used `httpdocs/ILS/public` — the Laravel root — as document root. Anyone could download files from it over HTTPS, including `database/database.sqlite` (the live database: enquiries with names, emails and phones), `storage/logs/laravel.log`, `composer.json/lock` and source files. The `.env` was **not** reachable (403 from the server for dot-files). The `.ie` also showed an old copy of the site (duplicate content for Google).
- **Found:** 2026-10-12, during the Google/SEO technical check.
- **Fixed:** 2026-10-12 ~14:52 (server time), by a `.htaccess` in the Laravel root: `.ie` → 301 to the same page on `.com`; `*.plesk.page` → 403. Verified: the files now redirect to `.com` (404 there) or are refused. Committed to Git (`abc0aa4`) so a redeploy keeps it.
- **Access check:** Plesk access logs for `irishlaundrysystems.ie` from 2026-07-17 (oldest entry kept) to the fix: searched `database.sqlite`, `database/`, `storage/`, `laravel.log`, `composer`, `.env`. The only successful downloads were the technical check itself on 2026-10-12 (IP 89.100.101.210, `curl`). Bots tried `.env` variants on 2026-07-17, 2026-08-10, 2026-09-15 and 2026-09-25 — all blocked (403/404). No sign that personal data was obtained by a third party. Nothing can be said for before 2026-07-17 (no logs).
- **Decision on notifying the Data Protection Commission:** ILS (owner). Evidence above.
- **Prevent:** keep the root `.htaccess`; any domain added in Plesk must use `httpdocs/ILS/public/public` as document root, or be a redirect.
