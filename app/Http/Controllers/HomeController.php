<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $servicios = [
        [
            'link' => 'reparacion-mantencion',
            'title' => 'Reparación y Mantención',
            'icon' => 'tools',
            'description' => 'Soluciones técnicas eficientes para conservar la seguridad y el buen estado de viviendas, oficinas o instalaciones.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'revestimiento-mejoramiento',
            'title' => 'Revestimiento y Mejoramiento',
            'icon' => 'hard-hat',
            'description' => 'Soluciones para renovar la apariencia y funcionalidad de sus espacios.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'ampliacion-remodelacion',
            'title' => 'Ampliación y Remodelación',
            'icon' => 'home',
            'description' => 'Redefinimos espacios existentes para mejorar distribución, funcionalidad y valor arquitectónico.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'modelamiento-3d',
            'title' => 'Modelamiento 3D',
            'icon' => 'cube',
            'description' => 'Creación de modelos tridimensionales detallados para visualizar proyectos antes de su ejecución.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'cubicacion-presupuestos',
            'title' => 'Cubicación y Presupuestos',
            'icon' => 'calculator',
            'description' => 'Permite estimar y controlar el presupuesto del proyecto mediante estudio técnico de cantidades y costos.',
            'long_description' => 'Estudio completo del proyecto. Cuantificación de materiales, mano de obra y recursos. Nch 353. Servicio para todo el país.',
        ],
        [
            'link'=> 'visitas-terreno',
            'title' => 'Visitas a Terreno',
            'icon' => 'map-marker-alt',
            'description' => 'Inspecciones técnicas, levantamientos planimétricos, informes y set fotográfico',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'visualizacion-dron',
            'title' => 'Visualización por Dron',
            'icon' => 'camera',
            'description' => 'Inspecciones de alta calidad con drones para acceder a áreas difíciles y obtener imágenes detalladas.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'pintura-exterior-interior',
            'title' => 'Pintura Exterior e Interior',
            'icon' => 'paint-roller',
            'description' => 'Servicios de pintura profesional para embellecer y proteger sus espacios interiores y exteriores.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'paisajismo-jardineria',
            'title' => 'Paisajismo y Jardin',
            'icon' => 'tree',
            'description' => 'Diseño y mantenimiento de jardines y espacios verdes para embellecer su entorno.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],
        [
            'link'=> 'asesoria-tecnica',
            'title' => 'Asesoría Técnica',
            'icon' => 'comments',
            'description' => 'Asesoría técnica especializada para resolver dudas y brindar orientación en sus proyectos.',
            'long_description' => 'Detalles extendidos del servicio de reparación y mantención...',
        ],

        

    ];

    //
    public function index(){
        return view('pages.home', [
            'servicios' => $this->servicios,
        ]);
    }

}
