<nav class="bg-white shadow-md fixed w-full z-10">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/ofitec_logo.webp') }}" alt="OFITEC Logo" class="h-10">
                </a>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="{{route('home')}}" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('/') ? 'font-bold' : '' }}">Inicio</a>
                <a href="{{ url('/') }}#servicios" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('servicios') ? 'font-bold ' : '' }}">Servicios</a>
                <a href="#nosotros" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('nosotros') ? 'font-bold' : '' }}">Nosotros</a>
                <a href="{{ route('projects.index') }}" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->routeIs('projects.index') ? 'font-bold' : '' }}">Proyectos</a>
                <a href="#" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('contacto') ? 'font-bold' : '' }}">Contacto</a>
            </div>
            <div class="md:hidden">
                <button id="menu-toggle" class="text-primary focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="flex flex-col space-y-4 py-4">
                <a href="{{route('home')}}" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('/') ? 'font-bold' : '' }}">Inicio</a>
                <a href="{{ url('/') }}#servicios" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('servicios') ? 'font-bold bg-primary ' : '' }}">Servicios</a>
                <a href="#nosotros" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->is('nosotros') ? 'font-bold' : '' }}">Nosotros</a>
                <a href="{{ route('projects.index') }}" class="nav-link text-primary hover:text-gray-600 transition duration-300 {{ request()->routeIs('projects.index') ? 'font-bold' : '' }}">Proyectos</a>
                <a href="#" class="nav-link text-primary hover:text-gray-600 transition duration-300">Contacto</a>
            </div>
        </div>
    </div>
</nav>