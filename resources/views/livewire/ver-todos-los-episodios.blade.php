<div>
    <div class="px-4 pt-4 pb-12 bg-primary-900">
        <div class="md:px-8 mb-8">
            <p class="p-1 text-white"><b>Episodios</b></p>
            <select name="episodios" id="episodios" wire:model.live="temporada"  class="bg-black rounded-sm border-none text-white mb-3 focus:border-none focus:outline-none focus:ring-0">
                <option value="1" selected>Temporada 1</option>
                <option value="2">Temporada 2</option>
                <option value="3">Temporada 3</option>
            </select>
            <div class="grid md:grid-cols-4 grid-cols-8 md:gap-4 gap-2">

                @if ($todos_los_episodios != null)
                    @foreach ($todos_los_episodios as $episodio)
                        <!-- Poner if temporada == 1 -->
                            <div class="md:col-span-1 col-span-3 ">
                                <a href="{{route('play', ['id_episodio'=>$episodio['id'], 'id_programa'=>$id_programa])}}"> 
                                    <img src="{{asset('img/deporvida-programa.jpg')}}" alt="Imagen de fondo">
                                </a>                  
                            </div>  
                            <div class="md:col-span-2 col-span-5">
                                <div class="pt-1 px-1">
                                    <p class="text-white text-sm md:text-md">{{ $episodio['nombre']}}</p>
                                    <p class="text-gray-400 text-xs md:text-sm">{{ $episodio['descripcion']}}</p>
                                </div>
                            </div>
                        
                    @endforeach
                @else
                    <p class="text-white pl-8">No Hay Episodios</p>
                @endif
                
                
            </div>
        </div>
    </div>
</div>
