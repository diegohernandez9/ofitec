@props(['icon', 'title', 'description', 'link' => '', 'delay' => 0])

<div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition-transform duration-500">
    <div class="h-48 bg-gray-100 flex items-center justify-center" data-aos="fade-up" data-aos-duration="400" data-aos-delay="{{ $delay }}">
        <i class="fas fa-{{ $icon }} text-6xl text-primary"></i>
    </div>
    <div class="p-6">
        <h4 class="text-xl font-bold text-primary mb-2 text">{{ $title }}</h4>
        <p class="text-gray-600 mb-4">{{ $description }}</p>
        <a href="{{route('services.show', $link)}}" class="text-primary hover:text-gray-600 font-bold transition duration-300">Saber más →</a>
    </div>
</div>

