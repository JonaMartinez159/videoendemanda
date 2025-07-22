<x-app-layout >

    <x-navbar></x-navbar>

    <div data-aos="fade-up" data-aos-duration="1000">

        <div class="p-4" data-aos="fade-up" data-aos-duration="2000">
            <img src="{{asset('img/banner.jpg')}}" class="md:h-[310px] w-full rounded-xl "><br><br>

            <div>
                @livewire('VerProgramasPrincipales')
            </div>
            <div>
                @livewire('VerNuestraSeleccion')
            </div>
            <br><br>

            <!-- radio -->
            <div class="p-8" data-aos="fade-up" data-aos-duration="1000">
                <div class="grid md:grid-cols-8 bg-gradient-to-r from-fuchsia-500 to-cyan-500 rounded-lg">
                    <div class="flex items-center justify-center col-span-2 col-start-2">
                        <img src="{{asset('img/aztlanradio-solochica.png')}}" alt="" class="w-[250px] h-[400px] rounded-2xl"> 
                    </div>
                    <div class="flex items-center justify-center p-4 col-span-4">
                        <div class="block pe-3">
                            <h2 class="text-white text-4xl pb-1 bold-lg"><b>Si lo tuyo es la radio y los podcast</b></h2>
                            <p class="text-white text-sm text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, officia! Pariatur necessitatibus commodi repellendus ratione, exercitationem suscipit fugiat aliquam accusantium sunt quas ducimus, molestiae ipsum dolores? Possimus quia impedit eveniet!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </div>
</x-app-layout>
