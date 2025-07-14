<?php

namespace App\Livewire;

use Livewire\Component;

class VerTodosLosEpisodios extends Component
{
    public $id_episodio;
    public $todos_los_episodios;
    public $temporada='1';

    public $data = [
        [
            "id" => 1,
            "path" => "usr/share/nginx/programas",
            "streamkey" => "derechomujer",
            "programa" => "1",
            "nombre" => "La ley en el matrimonio",
            "descripcion" => "Este episodio se habla sobre las diferentes leyes del matrimonio",
            "miniatura" => "http://localhost:8000/storage/fotos/HDBrWZCjCVA441ory9e2GruNNYYOUMIJ39rkLotz.jpg",
            "en_demanda" => "0",
            "temporada" => "1",
            "created_at" => "2025-07-02T15:38:11.000000Z",
            "updated_at" => "2025-07-08T22:01:49.000000Z"
        ],
        [
            "id" => 2,
            "path" => "usr/share/nginx/programas",
            "streamkey" => "derechomujer",
            "programa" => "1",
            "nombre" => "Derecho a disernir",
            "descripcion" => "En este capítulo veremos formas de delegar información",
            "miniatura" => "http://localhost:8000/storage/fotos/olCOxgJQojH60VnYea4qRkop8eQsXFyEvopBTf3v.jpg",
            "en_demanda" => "0",
            "temporada" => "2",
            "created_at" => "2025-07-03T00:26:32.000000Z",
            "updated_at" => "2025-07-07T02:07:58.000000Z"
        ]
    ];
    
    public function render()
    {
        //obtener todos los episodios donde temporada 1
        $this->todos_los_episodios = $this->data;
        return view('livewire.ver-todos-los-episodios');
    }
}
