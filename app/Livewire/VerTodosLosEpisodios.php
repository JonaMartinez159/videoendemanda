<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class VerTodosLosEpisodios extends Component
{
    public $id_programa;
    public $todos_los_episodios;
    public $temporada='1';

    public function render()
    {
        $apiurl = 'https://live-srtn.nayarit.gob.mx/api/episodios'.$this->id_programa;
        $response = Http::withOptions(['verify' => false])->get($apiurl);
        $this->todos_los_episodios = $response->json();
        
        return view('livewire.ver-todos-los-episodios');
    }
}
