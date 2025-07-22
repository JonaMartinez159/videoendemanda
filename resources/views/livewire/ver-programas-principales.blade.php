<div class="mx-8 mb-4">
    
    <p class="p-1 mb-1 text-white"><b>Programas Principales</b></p>
    <section class="splide" id="slider1" data-splide='{"type":"loop","perPage":4}' aria-label="Splide Basic HTML Example">
        <div class="splide__track">
              <ul class="splide__list">
                @foreach ($programas_data as $programa)
                    <li class="splide__slide">
                        <div class="pe-2">
                            <a href="{{route('ver', $programa['id'])}}">
                                <div class="relative rounded-lg overflow-hidden">
                                    <img src="{{$programa['banner']}}" alt="Imagen de fondo" class="w-full md:h-[150px] h-[180px]">
                                    <div class="absolute bottom-0 w-full h-16 bg-gradient-to-t from-black to-transparent px-4 py-2 items-end">
                                    <span class="text-white text-xs">{{ $programa['nombre']}}</span>
                                    <span class="text-gray-500 text-sm"></span>
                                    </div>
                                </div>  
                            </a> 
                        </div>
                    </li>
                @endforeach
              </ul>
        </div>
    </section>
</div>