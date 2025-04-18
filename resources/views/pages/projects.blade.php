<x-layout.app title="OFITEC | Proyectos">
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 bg-primary text-white">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Nuestros Proyectos</h1>
                <p class="text-lg mb-6 max-w-3xl mx-auto">Descubra nuestra trayectoria a través de los proyectos que hemos realizado. Cada proyecto refleja nuestro compromiso con la calidad y la excelencia en construcción.</p>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4 mb-8" data-aos="fade-up" data-aos-duration="600">
                <button class="category-btn active bg-primary text-white hover:bg-gray-800 font-medium py-2 px-6 rounded-full transition duration-300" data-category="all">Todos</button>
                <button class="category-btn bg-white text-primary hover:bg-gray-200 font-medium py-2 px-6 rounded-full transition duration-300" data-category="residencial">Residencial</button>
                <button class="category-btn bg-white text-primary hover:bg-gray-200 font-medium py-2 px-6 rounded-full transition duration-300" data-category="comercial">Comercial</button>
                <button class="category-btn bg-white text-primary hover:bg-gray-200 font-medium py-2 px-6 rounded-full transition duration-300" data-category="paisajismo">Paisajismo</button>
                <button class="category-btn bg-white text-primary hover:bg-gray-200 font-medium py-2 px-6 rounded-full transition duration-300" data-category="remodelacion">Remodelación</button>
                <button class="category-btn bg-white text-primary hover:bg-gray-200 font-medium py-2 px-6 rounded-full transition duration-300" data-category="oficina-tecnica">Oficina Técnica</button>
            </div>
        </div>
    </section>

    <section id="proyectos" class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="project-card transform hover:scale-105 transition-transform duration-500">
                    <x-cards.project-card image="{{ asset('img/projects/semiInvernadero.avif') }}" title="Semi Invernadero Agrícola"
                    title="Semi Invernadero Agrícola"
                    description="Proyecto agrícola de 1 ha con techos retráctiles. Incluye estudio técnico, cubicación y análisis de costos según normativa chilena."
                    :tags="['Proyecto Agrícola','Normativa Chilena']" :delay="100" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="residencial" >
                    <x-cards.project-card image="{{ asset('img/projects/vivienda_unifamiliar_280m2.avif') }}"  titleClass="project-card"
                    title="Vivienda unifamiliar 280m2"
                    description="Casa de 2 pisos en madera. Evaluación completa, asesoría técnica y control de obra con hoja de cálculo."
                    :tags="['Vivienda Madera', 'Asesoría Técnica']" :delay="200" />
                </div>

                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>

                {{-- pegados --}}

                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>
                <div class="project-card hover:scale-105 transition-transform duration-500" data-category="remodelacion">
                    <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}" data-category="remodelacion" titleClass="project-card"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
                </div>

                
                
            </div>
        </div>

        <div id="no-results" style="display: none; height: 600px;" class="flex flex-col items-center justify-center mt-10 text-gray-600 text-center" data-aos="fade-up" data-aos-duration="500">
            <p class="text-lg font-medium">No hay resultados para esta categoría.</p>
        </div>
        
    </section>

    

</x-layout.app>