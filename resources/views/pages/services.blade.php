<x-layout.app>
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 text-white relative" style="background-image: url('{{asset($servicios['image'])}}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        
        <div class="container mx-auto px-4 py-4 relative z-9 flex items-center min-h-[20vh] lg:h-full ">
            <div class="text-start" data-aos="fade-up" data-aos-duration="800">
                <h1 class="text-4xl md:text-5xl font-bold mb-4 mt-10">{{$servicios['title']}}</h1>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100">
        <div class="container mx-auto px-4">
            <p class="text-gray-700 text-justify text-sm lg:text-lg mb-3">{{ $servicios['description_first'] }}</p>
            <p class="text-gray-700 text-justify text-sm lg:text-lg">{{ $servicios['description_second'] }}</p>
            
            <div class="flex flex-wrap gap-2 mt-10 mb-10">
                @foreach ($servicios['tags'] as $tag)
                    <span class="bg-gray-200 text-gray-800 hover:bg-gray-300 transition cursor-pointer text-sm font-medium px-3 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </section>


</x-layout.app>