<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VerPrograma extends Component
{
    public $id_programa;
    public $datos_del_programa;

    public function mount()
    {
        $apiurl = 'https://live-srtn.nayarit.gob.mx/api/'.$this->id_programa;
        $response = Http::withOptions(['verify' => false])->get($apiurl);
        $this->datos_del_programa = $response->json();

        return view('livewire.ver-programa');
    }
}
