<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:hash-password', function () {
    $password = $this->secret('New admin password');

    if (strlen((string) $password) < 12) {
        $this->error('Use at least 12 characters.');
        return 1;
    }

    $this->line('Set this in .env (keep the quotes):');
    $this->line('ADMIN_PASSWORD="'.Hash::make($password).'"');
})->purpose('Generate a hashed ADMIN_PASSWORD value for .env');
