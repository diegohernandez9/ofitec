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

            'description_first' => 'Ofrecemos servicios de revestimiento exterior e interior para viviendas, oficinas y locales comerciales. Evaluamos el estado actual de muros, fachadas y superficies, proponiendo soluciones técnicas que mejoran la estética, durabilidad y resistencia al clima. Usamos materiales de alta calidad y aplicamos técnicas modernas de instalación para asegurar acabados uniformes y duraderos.',
            'description_second' => 'Ya sea que necesites renovar el exterior de una vivienda o aplicar revestimientos decorativos en interiores, nuestro equipo garantiza un resultado profesional y funcional.',

            'tags' => ['Revestimientos', 'Fachadas', 'Mejoras estéticas', 'Renovación', 'Protección exterior', 'Acabados'],

            'image' => '/img/services/revestimiento-mejoramiento.webp',
        ],
        [
            'link' => 'ampliacion-remodelacion',
            'title' => 'Ampliación y Remodelación',
            'icon' => 'home',
            'description_first' => 'Nos especializamos en proyectos de ampliación y remodelación de espacios habitacionales y comerciales. Desde redistribuciones internas hasta ampliaciones estructurales, nuestro enfoque combina asesoría técnica, planificación constructiva y control de costos.',
            'description_second' => 'Evaluamos las necesidades del cliente, desarrollamos un anteproyecto y acompañamos cada etapa del proceso, cumpliendo con la normativa chilena vigente. Nuestro objetivo es transformar los espacios según tus requerimientos, con eficiencia y profesionalismo.',
            'image' => '/img/services/ampliacion-remodelacion.webp',
            'tags' => ['Remodelación', 'Ampliaciones', 'Redistribución', 'Diseño interior', 'Reformas', 'Eficiencia espacial'],
        ],
        [
            'link' => 'modelamiento-3d',
            'title' => 'Modelamiento 3D',
            'icon' => 'cube',
            'description_first' => 'Realizamos modelamiento 3D de proyectos arquitectónicos y constructivos, ideal para visualizar y comunicar de forma clara el diseño y distribución de espacios. Esta herramienta permite anticipar errores, mejorar decisiones de diseño y presentar propuestas realistas a clientes o autoridades.',
            'description_second' => 'Utilizamos software especializado para generar modelos detallados de interiores, exteriores, estructuras y elementos técnicos, facilitando así la planificación y ejecución del proyecto.',
            'image'=> '/img/services/modelamiento-3d.webp',
            'tags' => ['Modelado 3D', 'Visualización arquitectónica', 'Planificación de obra', 'Presentación de proyectos', 'Diseño digital', 'Render técnico'],
        ],
        [
            'link' => 'cubicacion-presupuestos',
            'title' => 'Cubicación y Presupuestos',
            'icon' => 'calculator',
            'description_first' => 'Ofrecemos un servicio técnico detallado de cubicación de materiales y elaboración de presupuestos de obra, fundamental para planificar correctamente cualquier proyecto de construcción, remodelación o mantenimiento.',
            'description_second' => 'Analizamos planos, definimos partidas de trabajo y entregamos un itemizado con precios unitarios. Esto permite a nuestros clientes visualizar los costos reales y optimizar recursos desde el inicio del proyecto.',
            'image'=> '/img/services/cubicacion-presupuesto.webp',
            'tags' => ['Cubicaciones', 'Presupuestos', 'Planificación', 'Control de costos', 'Itemizado', 'Precios unitarios'],
        ],
        [
            'link' => 'visitas-terreno',
            'title' => 'Visitas a Terreno',
            'icon' => 'map-marker-alt',
            'description_first' => 'Realizamos visitas técnicas a terreno para el levantamiento de información constructiva, detección de problemas y evaluación de factibilidad de obras. Este servicio es esencial para proyectos que requieren diagnóstico previo, asesoría personalizada o validación de condiciones',
            'description_second' => 'Durante la visita, nuestro equipo técnico toma medidas, recopila evidencias fotográficas y emite un informe preliminar para apoyar la toma de decisiones.',
            'image'=> '/img/services/visita-terreno.webp',
            'tags' => ['Inspección técnica', 'Diagnóstico en terreno', 'Medición', 'Informe técnico', 'Asesoría directa'],
        ],
        [
            'link' => 'visualizacion-dron',
            'title' => 'Visualización por Dron',
            'icon' => 'camera',
            'description_first' => 'Ofrecemos servicios de visualización aérea con dron para obras en ejecución, techumbres, terrenos y levantamientos técnicos. Esta herramienta permite obtener imágenes y videos en alta resolución, ideales para inspecciones visuales, documentación de avance, evaluación de daños o generación de contenido visual para clientes y presentaciones.',
            'description_second' => 'El uso de dron mejora la eficiencia del levantamiento en terreno, entrega una perspectiva completa del entorno y complementa informes técnicos con evidencia visual clara y precisa.',
            'image'=> '/img/services/visualizacion-drone.webp',
            'tags' => ['Inspección aérea', 'Imágenes con dron', 'Levantamiento visual', 'Evaluación de techumbre', 'Dron técnico', 'Registro fotográfico'],
        ],
        [
            'link' => 'pintura-exterior-interior',
            'title' => 'Pintura Exterior e Interior',
            'icon' => 'paint-roller',
            'description_first' => 'Brindamos servicios de pintura profesional para exteriores e interiores, aplicando sistemas de recubrimiento duraderos y estéticamente atractivos. Evaluamos el estado de superficies, preparamos adecuadamente los sustratos y aplicamos pinturas de alta calidad para garantizar un acabado uniforme, resistente a la humedad y al paso del tiempo.',
            'description_second' => 'Combinamos eficiencia técnica con un enfoque estético para transformar visualmente cada espacio.',
            'image'=> '/img/services/pintura-exterior-interior.avif',
            'tags' => ['Pintura interior', 'Pintura exterior', 'Renovación estética', 'Recubrimientos', 'Protección', 'Acabado profesional'],
        ],
        [
            'link' => 'paisajismo-jardineria',
            'title' => 'Paisajismo y Jardin',
            'icon' => 'tree',
            'description_first' => 'Diseñamos y ejecutamos proyectos de paisajismo funcional y estético, enfocados en realzar la armonía entre arquitectura y entorno natural. Creamos soluciones para jardines residenciales, espacios comunes y áreas verdes en proyectos habitacionales o comerciales. Evaluamos terreno, tipo de vegetación, drenaje y necesidades del cliente, para proponer diseños sustentables y de bajo mantenimiento.',
            'description_second' => 'Nuestro objetivo es lograr espacios exteriores que inviten al uso y contribuyan al bienestar, integrando diseño, funcionalidad y cuidado ambiental.',
            'image'=> '/img/services/paisajismo-jardin.avif',
            'tags' => ['Diseño de jardines', 'Paisajismo residencial', 'Áreas verdes', 'Espacios exteriores', 'Sustentabilidad', 'Bajo mantenimiento'],
        ],
        [
            'link' => 'asesoria-tecnica',
            'title' => 'Asesoría Técnica',
            'icon' => 'comments',
            'description_first' => 'Ofrecemos asesoría técnica especializada para proyectos constructivos, remodelaciones o resolución de patologías estructurales. Nuestro equipo de ingenieros evalúa en terreno los problemas constructivos, realiza levantamiento técnico y entrega un informe profesional con diagnóstico y soluciones.',
            'description_second' => 'Aplicamos normativas vigentes y buenas prácticas de ingeniería, siendo un apoyo clave para particulares, arquitectos o constructoras que requieran respaldo técnico confiable y fundamentado.',
            'image'=> '/img/services/asesoria-tecnica.avif',
            'tags' => ['Diagnóstico técnico', 'Revisión estructural', 'Informes de daños', 'Normativa chilena', 'Asistencia en obra', 'Evaluaciones técnicas'],
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
