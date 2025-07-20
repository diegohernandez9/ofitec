@props(['image','icon', 'title', 'description', 'tags' => [], 'delay' => 0])

<div class="bg-white rounded-lg shadow-md overflow-hidden " data-aos="fade-up" data-aos-duration="500" data-aos-delay="{{ $delay }}">
    <div class="h-48 bg-gray-100 flex items-center justify-center transition-transform duration-300 hover:transform hover:scale-105">
        @if($image)
        <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-full h-full">
        @else
            <i class="fas fa-{{ $icon }} text-6xl text-primary"></i>
        @endif
    </div>
    <div class="p-6">
        <h4 class="text-xl font-bold text-primary mb-2">{{ $title }}</h4>
        <p class="text-gray-600 mb-4">{{ $description }}</p>
        <div class="flex flex-wrap gap-2 mt-4 mb-4">
            @foreach ($tags as $tag)
                <span class="bg-gray-200 text-gray-800 hover:bg-gray-300 transition cursor-pointer text-sm font-medium px-3 py-1 rounded-full">{{ $tag }}</span>
            @endforeach
        </div>
        {{-- <a href="#" class="text-primary hover:text-gray-600 font-bold transition duration-300">Saber más →</a> --}}
    </div>
</div>

