<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VerNuestraSeleccion extends Component
{
    public $programas_data;

    public function mount()
    {
        //$response = Http::get('https://live-srtn.nayarit.gob.mx/api/all');
        $response = Http::withOptions(['verify' => false])->get('https://live-srtn.nayarit.gob.mx/api/programas-nuestraseleccion');
        $this->programas_data = $response->json();
        return view('livewire.ver-programas-principales');
    }
}
