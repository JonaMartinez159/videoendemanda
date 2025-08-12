<div class="md:mx-8 mb-4">
    
    <p class="p-1 mb-1 text-white"><b>Programas Principales</b></p>
    <div class="hidden lg:inline xl:inline 2xl:inline">
        <section class="splide" id="slider1" data-splide='{"type":"loop","perPage":4, "pagination":false}' aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($programas_data as $programa)
                        <li class="splide__slide">
                            <div class="pe-2">
                                <a href="{{route('ver', $programa['id'])}}">
                                    <div class="rounded-lg overflow-hidden">
                                        <img src="{{$programa['banner']}}" alt="Imagen de fondo" class="w-full h-[170px] sm:h-[220px] xl:h-[170px] 2xl:h-[210px]">
                                        <div class="w-full items-end">
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
    <div class="inline lg:hidden xl:hidden 2xl:hidden">
        <section class="splide" id="slider3" data-splide='{"type":"loop","perPage":3, "pagination":false}' aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($programas_data as $programa)
                        <li class="splide__slide">
                            <div class="pe-2">
                                <a href="{{route('ver', $programa['id'])}}">
                                    <div class="relative rounded-lg overflow-hidden">
                                        <img src="{{$programa['banner']}}" alt="Imagen de fondo" class="w-full h-[200px] sm:h-[220px]">
                                        <div class="w-full items-end">
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
</div>