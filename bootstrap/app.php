<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin.auth' => \App\Http\Middleware\AdminAuth::class,
        ]);
        $middleware->append(\App\Http\Middleware\SecurityHeaders::class);
        $middleware->web(append: [\App\Http\Middleware\ResponsiveImages::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Record admin login lockouts in the security log — once per IP per minute so a flood can't fill the disk.
        // Returns nothing, so the normal 429 response is still rendered.
        $exceptions->render(function (\Illuminate\Http\Exceptions\ThrottleRequestsException $e, \Illuminate\Http\Request $request) {
            if ($request->routeIs('admin.login.post')
                && \Illuminate\Support\Facades\Cache::add('admin-lockout-logged:'.$request->ip(), true, 60)) {
                \App\Http\Controllers\Admin\AuthController::audit('warning', 'Admin login locked out (too many attempts)', $request);
            }
        });
    })->create();
