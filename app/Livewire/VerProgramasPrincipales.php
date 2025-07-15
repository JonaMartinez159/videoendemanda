<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VerProgramasPrincipales extends Component
{
    /*private $data = [
        "id" => 1,
        "nombre" => "Derecho de mujer",
        "descripcion" => "Acompaña a Luz Amalia Barron a descubrir los derechos de la mujer",
        "categoria" => "Legal",
        "ruta" => "derechomujer",
        "banner" => "http://localhost:8000/storage/banners/a1hgg1zW3aBbNL49Wb5s6YXcNAOpeWOh5MNTP5sw.jpg",
        "created_at" => null,
        "updated_at" => "2025-07-06T23:56:02.000000Z",
        "episodios" => [
            [
                "id" => 1,
                "path" => "usr/share/nginx/programas",
                "streamkey" => "derechomujer",
                "programa" => "1",
                "nombre" => "La ley en el matrimonio",
                "descripcion" => "Este episodio se habla sobre las diferentes leyes del matrimonio",
                "miniatura" => "http://localhost:8000/storage/fotos/HDBrWZCjCVA441ory9e2GruNNYYOUMIJ39rkLotz.jpg",
                "en_demanda" => "0",
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
                "created_at" => "2025-07-03T00:26:32.000000Z",
                "updated_at" => "2025-07-07T02:07:58.000000Z"
            ]
        ]
    ];*/

    public $programas_data;

    public function mount()
    {
        //$response = Http::get('https://live-srtn.nayarit.gob.mx/api/all');
        $response = Http::withOptions(['verify' => false])->get('https://live-srtn.nayarit.gob.mx/api/allprogramas');
        $this->programas_data = $response->json();
        return view('livewire.ver-programas-principales');
    }
}
