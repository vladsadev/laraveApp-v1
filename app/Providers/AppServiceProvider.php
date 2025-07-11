<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
         * Esta función se ejecuta automáticamente después de cargar
         * todas las dependencias requeridas para el proyecto
         *Aquí podemos configurar la aplicación según nos convenga */

        Model::preventLazyLoading();

    }
}
