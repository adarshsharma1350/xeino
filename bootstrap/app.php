<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
             then: function(){
                Route::middleware('web')->group(base_path('routes/auth.php'));
                Route::middleware(['web', 'auth', 'user'])->prefix('{username?}')->name('user.')->group(base_path('routes/user.php'));
             }
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'user' => App\Http\Middleware\UserMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
