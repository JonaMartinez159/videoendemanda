<x-app-layout >

    <x-navbar></x-navbar>

    <div data-aos="fade-up" data-aos-duration="1000">

        <div class="p-4" >
            <img src="{{asset('img/banner.jpg')}}" class="h-[310px] w-full rounded-xl "><br><br>

            <div data-aos="fade-up" data-aos-duration="2000">
                @livewire('VerProgramasPrincipales')
            </div>
            
        </div>

        <!--
        <div class="p-8">
            <p class="p-1 mb-1"><b>Ultimos Capitulos</b></p>

            <div class="grid md:grid-cols-3">
                <div class="md:col-span-2">
                    <div class="grid md:grid-cols-3 mb-4">
                        <div>
                            <img src="{{asset('img/deporvida-programa.jpg')}}" alt="Imagen de fondo" class="rounded-xl">
                        </div>
                        <div class="md:col-span-2 p-3">
                            <div class="flex">
                                <p class="bg-blue-600 text-white p-1 rounded-md w-fit text-xs bold me-1"><b>Deporvida</b></p>
                                <p class="bg-blue-600 text-white p-1 rounded-md w-fit text-xs bold"><b>T1 E5</b></p>
                            </div>
                            <p class="pt-1"><b>Diego Estrada Habla sobre la participacion de Nayarit en los juegos nacionales CONADE</b></p>
                            <p class="text-gray-500 text-xs">subido hace 2 horas</p>
                        </div>
                    </div>   
                    <div class="grid md:grid-cols-3">
                        <div>
                            <img src="{{asset('img/deporte10-programa.jpg')}}" alt="Imagen de fondo" class="rounded-xl">
                        </div>
                        <div class="md:col-span-2 p-3">
                            <div class="flex">
                                <p class="bg-blue-600 text-white p-1 rounded-md w-fit text-xs bold me-1"><b>Deporvida</b></p>
                                <p class="bg-blue-600 text-white p-1 rounded-md w-fit text-xs bold"><b>T1 E5</b></p>
                            </div>
                            <p class="pt-1"><b>Michelle Cruz y sus invitados celebran el triunfo del equipo Nayarita de baloncesto</b></p>
                            <p class="text-gray-500 text-xs">subido hace 2 horas</p>
                        </div>
                    </div> 
                </div>
                <div class="m-4 bg-gray-100 rounded-xl">

                </div>
            </div>
        </div> -->

        <x-footer></x-footer>
    </div>
</x-app-layout>
