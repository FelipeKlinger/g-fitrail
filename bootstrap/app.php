<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin' => \App\Http\Middleware\IsAdmin::class,
            'client' => \App\Http\Middleware\IsClient::class,
            'entrenador' => \App\Http\Middleware\IsEntrenador::class,
        ]);

        $middleware->redirectUsersTo(function (Request $request) {
            $role = $request->user()?->role;

            return match ($role) {
                'admin' => route('admin.dashboard'),
                'client' => route('clients.dashboard'),
                'entrenador' => route('entrenadors.dashboard'),
                default => route('profile.edit'),
            };
        });
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();