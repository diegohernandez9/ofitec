<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $servicios = [
            [
                'link' => 'reparacion-mantencion',
                'title' => 'Reparación y Mantención',
            ],
            [
                'link'=> 'revestimiento-mejoramiento',
                'title' => 'Revestimiento y Mejoramiento',
            ],
            [
                'link'=> 'ampliacion-remodelacion',
                'title' => 'Ampliación y Remodelación',
            ],
            [
                'link'=> 'cubicacion-presupuestos',
                'title' => 'Cubicación y Presupuestos',
            ],
            [
                'link'=> 'visitas-terreno',
                'title' => 'Visitas a Terreno',
            ],
            [
                'link'=> 'pintura-exterior-interior',
                'title' => 'Pintura Exterior e Interior',
            ],
            [
                'link'=> 'paisajismo-jardineria',
                'title' => 'Paisajismo y Jardin',
            ],
            [
                'link'=> 'asesoria-tecnica',
                'title' => 'Asesoría Técnica',
            ],
            [
                'link'=> 'modelamiento-3d',
                'title' => 'Modelamiento 3D',
            ],
            [
                'link'=> 'visualizacion-dron',
                'title' => 'Visualización por Dron',
            ],
        ];
    
        // Puedes pasarlo a todas las vistas
        View::share('servicios_footer', $servicios);
    }
}
