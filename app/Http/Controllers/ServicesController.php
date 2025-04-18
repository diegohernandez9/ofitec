<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    private $servicios = [
        [
            'link' => 'reparacion-mantencion',
            'title' => 'Reparación y Mantención',
            'icon' => 'tools',
            'description' => 'Servicios profesionales de reparación y mantención para mantener sus espacios en óptimas condiciones.',

            'description_first' => 'Ofrecemos servicios profesionales de reparación y mantención para hogares, oficinas, locales comerciales e instalaciones industriales en todo tipo de contextos. Nuestro equipo técnico cuenta con amplia experiencia para identificar y solucionar problemas comunes y complejos, tales como filtraciones de agua, fallas eléctricas, desgaste de materiales, grietas estructurales, instalaciones defectuosas, entre otros.',

            'description_second' => '
            Trabajamos con enfoque preventivo y correctivo, entregando soluciones duraderas que permiten extender la vida útil de sus espacios y sistemas, optimizando así su inversión. Utilizamos materiales certificados y herramientas de última generación, lo que garantiza una ejecución rápida, limpia y segura.',

            'image' => '/img/services/reparacion-mantencion.webp',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas']
        ],
        [
            'link' => 'revestimiento-mejoramiento',
            'title' => 'Revestimiento y Mejoramiento',
            'icon' => 'hard-hat',

            'description' => 'Soluciones de revestimiento y mejoramiento para renovar la apariencia y funcionalidad de sus espacios.',

            'description_first' => 'Detalles extendidos del servicio de reparación y mantención...',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',

            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],

            'image' => '/img/services/revestimiento-mejoramiento.webp',
        ],
        [
            'link' => 'ampliacion-remodelacion',
            'title' => 'Ampliación y Remodelación',
            'icon' => 'home',
            'description_first' => 'Transformamos sus espacios con servicios de ampliación y remodelación adaptados a sus necesidades.',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image' => '/img/services/ampliacion-remodelacion.webp',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'modelamiento-3d',
            'title' => 'Modelamiento 3D',
            'icon' => 'cube',
            'description_first' => 'Creación de modelos tridimensionales detallados para visualizar proyectos antes de su ejecución.',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image'=> '/img/services/modelamiento-3d.webp',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'cubicacion-presupuestos',
            'title' => 'Cubicación y Presupuestos',
            'icon' => 'calculator',
            'description_first' => 'Servicios de cubicación y presupuestos para una planificación precisa de sus proyectos.',
            'description_second' => 'Estudio completo del proyecto. Cuantificación de materiales, mano de obra y recursos. Nch 353. Servicio para todo el país.',
            'image'=> '/img/services/cubicacion-presupuesto.webp',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'visitas-terreno',
            'title' => 'Visitas a Terreno',
            'icon' => 'map-marker-alt',
            'description_first' => 'Inspecciones técnicas, levantamientos planimétricos, informes y set fotográfico',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image'=> '/img/services/visita-terreno.webp',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'visualizacion-dron',
            'title' => 'Visualización por Dron',
            'icon' => 'camera',
            'description_first' => 'Inspecciones de alta calidad con drones para acceder a áreas difíciles y obtener imágenes detalladas.',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image'=> '/img/services/visualizacion-drone.webp',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'pintura-exterior-interior',
            'title' => 'Pintura Exterior e Interior',
            'icon' => 'paint-roller',
            'description_first' => 'Servicios de pintura profesional para embellecer y proteger sus espacios interiores y exteriores.',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image'=> '/img/services/pintura-exterior-interior.avif',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'paisajismo-jardineria',
            'title' => 'Paisajismo y Jardin',
            'icon' => 'tree',
            'description_first' => 'Diseño y mantenimiento de jardines y espacios verdes para embellecer su entorno.',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image'=> '/img/services/paisajismo-jardin.avif',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],
        [
            'link' => 'asesoria-tecnica',
            'title' => 'Asesoría Técnica',
            'icon' => 'comments',
            'description_first' => 'Asesoría técnica especializada para resolver dudas y brindar orientación en sus proyectos.',
            'description_second' => 'Detalles extendidos del servicio de reparación y mantención...',
            'image'=> '/img/services/asesoria-tecnica.avif',
            'tags' => ['Reparaciones', 'Mantención preventiva', 'Servicios técnicos', 'Electricidad', 'Plomería', 'Filtraciones', 'Soluciones rápidas'],
        ],



    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.services');
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //


    // }

    public function show($link)
    {
        $servicio = collect($this->servicios)->firstWhere('link', $link);

        if (!$servicio) {
            abort(404);
        }

        return view('pages.services', ['servicios' => $servicio]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
