<footer class="bg-dark text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            <div>
                <img src="{{ asset('img/ofitec_logo.webp') }}" alt="OFITEC Logo" class="h-10 mb-4">
                <p class="text-gray-400 mb-4">Soluciones integrales en construcción y asesoría técnica para transformar sus espacios.</p>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com/ofitec.ccp/" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{config('app.whatsapp_link')}}" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Servicios</h4>
                <ul class="space-y-2">
                    @foreach (array_slice($servicios_footer, 0,6 ) as $servicio)

                    <li><a href="{{route('services.show', $servicio['link'])}}" class="text-gray-400 hover:text-white transition duration-300">{{$servicio['title']}}</a></li>

                    @endforeach
                    
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Oficina Técnica</h4>
                <ul class="space-y-2">
                    @foreach (array_slice($servicios_footer, 6,4) as $servicio )
                        
                        <li><a href="{{route('services.show', $servicio['link'])}}" class="text-gray-400 hover:text-white transition duration-300">{{$servicio['title']}}</a></li>
                    
                    @endforeach
                    
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-2">
                    <li><a href="{{route('home')}}" class="text-gray-400 hover:text-white transition duration-300">Inicio</a></li>
                    <li><a href="#servicios" class="text-gray-400 hover:text-white transition duration-300">Servicios</a></li>
                    <li><a href="#nosotros" class="text-gray-400 hover:text-white transition duration-300">Nosotros</a></li>
                    <li><a href="{{route('projects.index')}}" class="text-gray-400 hover:text-white transition duration-300">Proyectos</a></li>
                    <li><a href="{{route('contact.index')}}" class="text-gray-400 hover:text-white transition duration-300">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} OFITEC. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>