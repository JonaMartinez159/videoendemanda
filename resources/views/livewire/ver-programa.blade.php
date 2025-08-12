<div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
    <div class="relative rounded-lg overflow-hidden">
        <img src="{{ $datos_del_programa['banner']}}" alt="Card Image" class="w-full h-[400px] lg:h-[700px] xl:h-[700px]">

        <div class="absolute inset-0 bg-gradient-to-t from-primary-900 to-transparent"></div>
        <div class="absolute md:bottom-5 bottom-0 md:left-10 p-4 text-white">
            <div class="grid md:grid-cols-4">
                <div class="col-span-2">
                    <h3 class="text-xl font-semibold">{{$datos_del_programa['nombre']}}</h3>
                    <p>{{$datos_del_programa['descripcion']}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti placeat tenetur vitae dolore. Nam laborum recusandae odit unde quae molestias beatae quidem eaque blanditiis</p>
                    <div class="flex mt-1">
                        <button class="bg-white rounded-md text-black p-2 text-md" >Ver Ahora</button>
                        <button class="bg-transparent ml-1 rounded-md border border-1-white text-white p-2 text-md" >Favoritos</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
