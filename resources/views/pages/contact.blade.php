<x-layout.app title="OFITEC | Contacto">

    <section class="pt-24 pb-16 md:pt-32 md:pb-24 bg-primary text-white">
        <div class="container mx-auto px-4">
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
                                <input type="text" id="name" name="name" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" required>
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Correo electrónico</label>
                                <input type="email" id="email" name="email" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none" required>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-gray-700 font-medium mb-2">Teléfono</label>
                                <input type="tel" id="phone" name="phone" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none">
                            </div>
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
                            <textarea id="message" name="message" rows="6" class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none resize-none" required></textarea>
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
                                    <p class="text-gray-600">Av. Principal 1234, Oficina 567<br>Santiago, Chile</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-primary rounded-full p-3 mr-4 w-10 h-10 flex items-center justify-center">
                                    <i class="fas fa-phone-alt text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary mb-1">Teléfono</h3>
                                    <p class="text-gray-600">+56 2 2345 6789</p>
                                    <p class="text-gray-600">+56 9 8765 4321</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-primary rounded-full p-3 mr-4 w-10 h-10 flex items-center justify-center">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-primary mb-1">Correo electrónico</h3>
                                    <p class="text-gray-600">contacto@ofitec.cl</p>
                                    <p class="text-gray-600">info@ofitec.cl</p>
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
                        <div class="bg-white p-6">
                            <h3 class="font-bold text-primary mb-4 ">Síguenos en redes sociales</h3>
                            <div class="flex space-x-4">
                                <a href="#" class="bg-primary hover:bg-gray-800 text-white rounded-full w-10 h-10 flex items-center justify-center transition duration-300">
                                    <i class="fab fa-instagram"></i>
                                </a>
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
                            <h3 class="text-xl font-bold text-primary">¿Cuánto tiempo toma completar un proyecto de remodelación?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-1" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">El tiempo de un proyecto de remodelación varía según su complejidad y alcance. Proyectos pequeños pueden tomar de 2 a 4 semanas, mientras que remodelaciones más extensas pueden requerir de 2 a 6 meses. Durante la consulta inicial, proporcionamos un cronograma detallado adaptado a su proyecto específico.</p>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-2">
                            <h3 class="text-xl font-bold text-primary">¿Ofrecen garantía por sus trabajos?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-2" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Sí, todos nuestros trabajos cuentan con garantía. Ofrecemos una garantía estándar de 1 año para la mano de obra y respetamos las garantías de los fabricantes para los materiales utilizados. Nuestro compromiso es asegurar su completa satisfacción con el resultado final.</p>
                        </div>
                    </div>

                  
                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-3">
                            <h3 class="text-xl font-bold text-primary">¿Cómo se determina el presupuesto de un proyecto?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-3" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">El presupuesto se determina después de una evaluación detallada de su proyecto. Consideramos factores como el tamaño del área, los materiales seleccionados, la complejidad del trabajo y el tiempo estimado. Realizamos una visita técnica gratuita para proporcionar un presupuesto preciso y transparente, sin costos ocultos.</p>
                        </div>
                    </div>

                    
                    <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up" data-aos-duration="800">
                        <button class="faq-toggle w-full flex justify-between items-center p-6 focus:outline-none" data-target="faq-4">
                            <h3 class="text-xl font-bold text-primary">¿Trabajan en proyectos fuera de Santiago?</h3>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div id="faq-4" class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Sí, ofrecemos nuestros servicios en Santiago y sus alrededores. También consideramos proyectos en otras regiones dependiendo de su alcance y especificaciones. Contáctenos para discutir su ubicación y determinar si podemos atender su proyecto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <x-home.cta />
</x-layout.app>