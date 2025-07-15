<div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
    <div class="relative rounded-lg overflow-hidden">
        <img src="{{ $datos_del_programa['banner']}}" alt="Card Image" class="w-full h-[500px]">

        <div class="absolute inset-0 bg-gradient-to-t from-primary-900 to-transparent"></div>
        <div class="absolute bottom-20 left-10 p-4 text-white">
            <div class="grid grid-cols-4">
                <div class="col-span-2">
                    <h3 class="text-xl font-semibold">{{$datos_del_programa['nombre']}}</h3>
                    <p>{{$datos_del_programa['descripcion']}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
