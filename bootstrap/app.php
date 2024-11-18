<?php

use App\Http\Middleware\Candidate;
use App\Http\Middleware\EmailUnverified;
use App\Http\Middleware\Employer;
use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\PreventBack;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            HandleInertiaRequests::class,

        ]);

        $middleware->alias([
            'candidate' => Candidate::class,
            'employer' => Employer::class,
            'email' => EmailUnverified::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
