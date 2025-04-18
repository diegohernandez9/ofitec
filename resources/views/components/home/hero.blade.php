<section id="inicio" class="relative bg-cover bg-center text-white h-screen flex items-center justify-center" style="background-image: url('{{ $image }}');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative z-9 text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">{{ $title }}</h1>

        @isset($description)
            <p class="text-lg mb-6">{{ $description }}</p>
        @endisset

        @if(!empty($primaryButtonText) || !empty($secondaryButtonText))
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                @isset($primaryButtonText)
                    <a href="#servicios"
                       class="bg-white hover:bg-gray-200 text-primary font-bold py-3 px-6 rounded-lg transition duration-300 text-center">
                        {{ $primaryButtonText }}
                    </a>
                @endisset

                @isset($secondaryButtonText)
                    <a href="#"
                       class="bg-transparent border-2 border-white hover:bg-white hover:text-primary font-bold py-3 px-6 rounded-lg transition duration-300 text-center">
                        {{ $secondaryButtonText }}
                    </a>
                @endisset
            </div>
        @endif
    </div>
</section>
