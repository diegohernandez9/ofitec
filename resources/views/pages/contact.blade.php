<x-layout.app title="OFITEC | Contacto">

    <section class="pt-24 pb-16 md:pt-32 md:pb-24 bg-primary text-white relative contact">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="container mx-auto px-4 relative">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Contáctanos</h1>
                <p class="text-lg mb-6 max-w-2xl mx-auto">Estamos aquí para responder a sus preguntas y ayudarle con su próximo proyecto de construcción o remodelación.</p>
            </div>
        </div>
    </section>


    <section class="py-16 bg-light" >
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row gap-12">

                <div class="lg:w-2/3">
                    <h2 class="text-3xl font-bold text-primary mb-6">Envíanos un mensaje</h2>
                    <form id="contact-form" class="space-y-6" method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nombre completo</label>
                                <input type="text" id="name" name="name" placeholder="Ingresa tu nombre completo" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" required>
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Correo electrónico</label>
                                <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" required>
                            </div>
                        </div>
                        <input type="hidden" id="phonePrefix" value="+569">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Teléfono</label>
                                <div class="flex w-full">
                                    <div class="flex items-center gap-2 bg-gray-200 px-3 py-2 border border-r-0 border-gray-300 rounded-l-lg text-sm text-gray-800">
                                      <img src="https://flagcdn.com/w40/cl.png" alt="Chile" class="w-6 h-4 object-cover rounded-sm" />
                                      +569
                                    </div>
                                    <input
                                      type="tel"
                                      placeholder="12345678"
                                      id="phoneNumber"
                                      class="flex-1 px-4 py-3 border border-gray-300 rounded-r-lg focus:outline-none text-sm text-gray-800"
                                    />
                                  </div>
                            </div>
                            <input type="hidden" name="phone" id="fullPhone">
                            <div>
                                <label for="subject" class="block text-gray-700 font-medium mb-2">Asunto</label>
                                <select id="subject" name="subject" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" required>
                                    <option value="" disabled selected>Seleccione un asunto</option>
                                    <option value="presupuesto">Solicitud de presupuesto</option>
                                    <option value="informacion">Información de servicios</option>
                                    <option value="proyecto">Consulta sobre proyecto</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Mensaje</label>
                            <textarea id="message" name="message" rows="6" placeholder="Escribe tu mensaje y te responderemos a la brevedad" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none resize-none" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-primary hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-lg transition duration-300">Enviar mensaje</button>
                        </div>
                    </form>
                </div>


                <div class="lg:w-1/3">
                    <h2 class="text-3xl font-bold text-primary mb-6">Información de contacto</h2>
                    <div class="bg-white p-6 mb-8">
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-primary rounded-full p-3 mr-4 w-10 h-10 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary mb-1">Dirección</h3>
                                    <p class="text-gray-600">Concepción, Chile</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-primary rounded-full p-3 mr-4 w-10 h-10 flex items-center justify-center">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary mb-1">Teléfono</h3>
                                    <p class="text-gray-600">+56 9 5649 0413</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-primary rounded-full p-3 mr-4 w-10 h-10 flex items-center justify-center">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary mb-1">Correo electrónico</h3>
                                    <p class="text-gray-600">ofitec.ccp@gmail.com</p>
                                    {{-- <p class="text-gray-600">info@ofitec.cl</p> --}}
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-primary rounded-full p-3 mr-4 w-10 h-10 flex items-center justify-center">
                                    <i class="fas fa-clock text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary mb-1">Horario de atención</h3>
                                    <p class="text-gray-600">Lunes a Viernes: 9:00 - 18:00</p>
                                    <p class="text-gray-600">Sábado: 9:00 - 13:00</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="mb-10 py-10 bg-light" data-aos="fade-up" data-aos-duration="800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-primary mb-2">Preguntas frecuentes</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Respuestas a las preguntas más comunes sobre nuestros servicios.</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">

                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-1">
                            <h3 class="text-xl font-bold text-primary">¿Qué incluye la asesoría técnica para techumbres o grietas estructurales?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-1" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Realizamos una revisión técnica en terreno de cubiertas, muros y elementos estructurales dañados. Se efectúan mediciones, tomas fotográficas (incluyendo aéreas si aplica), y se elabora un informe técnico con diagnóstico y propuestas de reparación. Este servicio está pensado para propietarios que necesitan un análisis profesional antes de intervenir.</p>
                        </div>
                    </div>


                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-2">
                            <h3 class="text-xl font-bold text-primary">¿Qué tipo de proyectos habitacionales han desarrollado?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-2" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Hemos participado en la evaluación de viviendas unifamiliares de distinta escala, incluyendo estructuras tradicionales y soluciones prefabricadas. Nuestros servicios abarcan el estudio del proyecto, cubicaciones, precios unitarios, asesoría en terreno y cumplimiento con normativa chilena vigente.</p>
                        </div>
                    </div>


                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-3">
                            <h3 class="text-xl font-bold text-primary">¿Cómo se determina el presupuesto de un proyecto?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-3" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">El presupuesto se determina después de una evaluación detallada de su proyecto. Consideramos factores como el tamaño del área, los materiales seleccionados, la complejidad del trabajo y el tiempo estimado.</p>
                        </div>
                    </div>


                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-4">
                            <h3 class="text-xl font-bold text-primary">¿Trabajan en proyectos fuera de Concepción?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-4" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Sí, ofrecemos nuestros servicios en Concepción y sus alrededores. También consideramos proyectos en otras regiones dependiendo de su alcance y especificaciones. Contáctenos para discutir su ubicación y determinar si podemos atender su proyecto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  




    @if (session('success'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    Swal.fire({
        icon: 'success',
        title: '¡Mensaje Enviado!',
        html: `
            <p style="margin:0;">
                Tu mensaje ha sido enviado correctamente.<br>
                <br>
                Nos pondremos en contacto contigo pronto.
            </p>`,
        showConfirmButton: false,
        timer: 3500,
        background: '#ffffff',
        color: '#111',
        backdrop: `
            rgba(0,0,0,0.4)
            left top
            no-repeat
        `,
        customClass: {
            popup: 'swal2-rounded',
            title: 'swal2-title-custom',
            htmlContainer: 'swal2-html-custom',
        },
    });
    </script>


    <style>
    .swal2-rounded {
        border-radius: 12px !important;
        padding: 2rem !important;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.15) !important;
    }
    .swal2-title-custom {
        font-weight: bold;
        font-size: 1.5rem;
    }
    .swal2-html-custom {
        font-size: 1rem;
        color: #444;
    }
    .swal2-timer-bar-custom {
        background-color: #28d17b !important; /* barra verde */
    }
    </style>
    @endif

</x-layout.app>