<div>
    <div class="px-4 pt-4 pb-12 bg-primary-900">
        <div class="px-8 mb-8">
            <p class="p-1 text-white"><b>Episodios</b></p>
            <select name="episodios" id="episodios" wire:model.live="temporada"  class="bg-black rounded-sm border-none text-white mb-3 focus:border-none focus:outline-none focus:ring-0">
                <option value="1" selected>Temporada 1</option>
                <option value="2">Temporada 2</option>
                <option value="3">Temporada 3</option>
            </select>
            <div class="grid md:grid-cols-4 sm:grid-cols-2 grid-cols-1 md:gap-4 gap-2">

                @foreach ($todos_los_episodios as $episodio)
                    @if ($temporada == $episodio['temporada'])
                        <div class="col-span-1">
                            <a href="/reproducir/{{ $episodio['path']}}"> 
                                <img src="{{asset('img/deporvida-programa.jpg')}}" alt="Imagen de fondo">
                            </a>                  
                        </div>  
                        <div class="col-span-3">
                            <div class="pt-4 px-1">
                                <p class="text-white text-md">{{ $episodio['nombre']}}</p>
                                <p class="text-gray-400 text-sm">{{ $episodio['descripcion']}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
                
            </div>
        </div>
    </div>
</div>
