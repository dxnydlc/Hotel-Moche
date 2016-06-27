<?php

namespace hotelMoche\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;


class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \hotelMoche\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \hotelMoche\Http\Middleware\VerifyCsrfToken::class,
    ];
    
    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \hotelMoche\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \hotelMoche\Http\Middleware\RedirectIfAuthenticated::class,
        'admin' => \hotelMoche\Http\Middleware\Admin::class,
        'habit' => \hotelMoche\Http\Middleware\Habitacion::class,
        'empre' => \hotelMoche\Http\Middleware\Empresa::class,
    ];
}
