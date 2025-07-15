<div>
    
    <p class="p-1 mb-1 text-white pl-8"><b>Programas</b></p>
    <div class="grid md:grid-cols-4 gap-4 px-8 mb-4">
        @foreach ($programas_data as $programa)
        <div>
            <a href="{{route('ver', $programa['id'])}}" wire:navigate>
                <div class="relative rounded-lg overflow-hidden">
                    <img src="{{$programa['banner']}}" alt="Imagen de fondo" class="w-full h-[150px]">
                    <div class="absolute bottom-0 w-full h-16 bg-gradient-to-t from-black to-transparent px-4 py-2 items-end">
                    <span class="text-white text-sm">{{ $programa['nombre']}}</span>
                    <span class="text-gray-500 text-sm"></span>
                    </div>
                </div>  
            </a> 
        </div>
        @endforeach
    </div>    
</div>
