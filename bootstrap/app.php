<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\IsAdmin;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin' => IsAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Throwable $e, $request) {
            // Menampilkan error_page.blade.php untuk semua HTTP Exception (404, 500, 403, dll.)
            if ($e instanceof HttpExceptionInterface) {
                return response()->view('error_page', [
                    'exception' => $e,
                    'status' => $e->getStatusCode()
                ], $e->getStatusCode());
            }

            // Opsional: Menampilkan error_page.blade.php untuk server error (500) saat mode production
            if (!config('app.debug')) {
                return response()->view('error_page', [
                    'exception' => $e,
                    'status' => 500
                ], 500);
            }
        });
    })->create();
