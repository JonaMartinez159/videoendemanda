<?php

namespace App\Livewire;

use Livewire\Component;

class VerPrograma extends Component
{
    public $id_programa;
    public $datos_del_programa;
    private $data = [
        "id" => 1,
        "nombre" => "Derecho de mujer",
        "descripcion" => "Acompaña a Luz Amalia Barron a descubrir los derechos de la mujer",
        "categoria" => "Legal",
        "ruta" => "derechomujer",
        "banner" => "http://localhost:8000/storage/banners/a1hgg1zW3aBbNL49Wb5s6YXcNAOpeWOh5MNTP5sw.jpg",
        "created_at" => null,
        "updated_at" => "2025-07-06T23:56:02.000000Z",
    ];

    public function mount()
    {
        //Hacer la peticion http
        //
        //

        //por prueba, suponiendo que obtenemos un formato json_decodes
        $this->datos_del_programa = $this->data;
        return view('livewire.ver-programa');
    }
}
