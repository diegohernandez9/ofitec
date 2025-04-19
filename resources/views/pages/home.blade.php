<x-layout.app>
    <x-home.hero title="Soluciones Integrales en Construcción"
        description="Ofrecemos servicios profesionales de construcción, remodelación y asesoría técnica para transformar sus espacios."
        primaryButtonText="Nuestros Servicios" secondaryButtonText="Contáctanos"
        image="{{ asset('img/hero_img.webp') }}" imageAlt="Construcción profesional" />

    <section id="servicios" class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
                <h2 class="text-3xl font-bold text-primary mb-2">Nuestros Servicios</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Ofrecemos una amplia gama de servicios de construcción y
                    asesoría técnica para satisfacer todas sus necesidades.</p>
            </div>

           
            <h3 class="text-2xl font-bold text-primary mb-8" data-aos="fade-up" data-aos-duration="600">Servicios de
                Construcción y Oficina Tecnica</h3>
                <div class="mb-16 swiper-container" data-aos="fade-up" data-aos-duration="500">
                    <div class="swiper constructionServicesSwiper">
                        <div class="swiper-wrapper">
                            @foreach ($servicios as $servicio)
                                <div class="swiper-slide h-auto min-h-[450px] px-4 py-4">
                                    <x-cards.service-card 
                                        :icon="$servicio['icon']" 
                                        :title="$servicio['title']"
                                        :description="$servicio['description']"
                                        :link="$servicio['link']"
                                        :delay="100" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                
                   
                    <button class="custom-swiper-button custom-swiper-button-prev construction-prev bg-white hover:bg-gray-100 text-primary rounded-full shadow-md flex items-center justify-center transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="custom-swiper-button custom-swiper-button-next construction-next bg-white hover:bg-gray-100 text-primary rounded-full shadow-md flex items-center justify-center transition-all duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                
        </div>
    </section>

    <x-home.about />

    <section id="proyectos" class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
                <h2 class="text-3xl font-bold text-primary mb-2">Proyectos Destacados</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Conozca algunos de nuestros proyectos más destacados y el
                    impacto que hemos generado.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-cards.project-card image="{{ asset('img/projects/semiInvernadero.avif') }}"
                    title="Semi Invernadero Agrícola"
                    description="Proyecto agrícola de 1 ha con techos retráctiles. Incluye estudio técnico, cubicación y análisis de costos según normativa chilena."
                    :tags="['Proyecto Agrícola','Normativa Chilena']" :delay="100" />

                <x-cards.project-card image="{{ asset('img/projects/vivienda_unifamiliar_280m2.avif') }}"
                    title="Vivienda unifamiliar 280m2"
                    description="Casa de 2 pisos en madera. Evaluación completa, asesoría técnica y control de obra con hoja de cálculo."
                    :tags="['Vivienda Madera', 'Asesoría Técnica']" :delay="200" />

                <x-cards.project-card image="{{ asset('img/projects/asesoria_grietas_vivienda.avif') }}"
                    title="Asesoría por Grietas en Vivienda"
                    description="Diagnóstico estructural por grietas en muros y pisos. Medición en terreno e informe técnico para seguimiento."
                    :tags="['Grietas en Muros', 'Patología de Construcción']" :delay="300" />
            </div>
            <div class="text-center mt-10" data-aos="fade-up" data-aos-duration="500">
                <a href="{{route('projects.index')}}"
                    class="inline-block bg-primary hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">Ver
                    Más Proyectos</a>
            </div>
        </div>
    </section>

    <x-home.cta />

</x-layout.app>