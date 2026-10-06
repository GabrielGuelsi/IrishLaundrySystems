// Generates smaller WebP copies of the site's photos for srcset.
// Output: public/images/_r/<original path>-<width>w.webp + public/images/_r/manifest.json
// The ResponsiveImages middleware reads the manifest and adds srcset to <img> tags.
//
// Run after adding or replacing photos (sharp is not a project dependency):
//   npm i --no-save sharp && node scripts/build-responsive-images.mjs
import sharp from 'sharp';
import fs from 'fs';
import path from 'path';

sharp.cache(false);

const ROOT = process.env.ILS_ROOT ?? path.resolve(import.meta.dirname, '..');
const PUBLIC = path.join(ROOT, 'public');
const OUT = path.join(PUBLIC, 'images', '_r');
const WIDTHS = [480, 800, 1200, 1600];
const SCAN = ['resources/views', 'database', 'app', 'config'];

const walk = (dir) => fs.readdirSync(dir, { withFileTypes: true }).flatMap((e) =>
    e.isDirectory() ? walk(path.join(dir, e.name)) : [path.join(dir, e.name)]);

// Every image path referenced from the code.
const refs = new Set();
for (const d of SCAN) {
    for (const f of walk(path.join(ROOT, d))) {
        const src = fs.readFileSync(f, 'utf8');
        for (const m of src.matchAll(/\/images\/[^"' )]+\.(?:webp|jpe?g|png)/gi)) {
            if (!m[0].startsWith('/images/_r/')) refs.add(decodeURIComponent(m[0]));
        }
    }
}

const manifest = {};
for (const ref of [...refs].sort()) {
    const file = path.join(PUBLIC, ref);
    if (!fs.existsSync(file)) continue;
    const buf = fs.readFileSync(file);
    const { width } = await sharp(buf).metadata();
    const widths = [];
    for (const w of WIDTHS) {
        if (w > width * 0.85) break;
        const dest = path.join(OUT, ref.replace(/^\/images\//, '').replace(/\.[^.]+$/, '') + `-${w}w.webp`);
        if (!fs.existsSync(dest)) {
            fs.mkdirSync(path.dirname(dest), { recursive: true });
            const out = await sharp(buf).resize({ width: w }).webp({ quality: 78 }).toBuffer();
            fs.writeFileSync(dest, out);
        }
        widths.push(w);
    }
    if (widths.length) manifest[ref] = { w: width, v: widths };
}

fs.mkdirSync(OUT, { recursive: true });
fs.writeFileSync(path.join(OUT, 'manifest.json'), JSON.stringify(manifest, null, 1));
console.log(`${Object.keys(manifest).length} images, ${Object.values(manifest).reduce((s, m) => s + m.v.length, 0)} variants`);
