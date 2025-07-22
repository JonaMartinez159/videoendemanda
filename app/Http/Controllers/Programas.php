<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Programas extends Controller
{
    public function show($id_programa){
        
        return view('ver', ['id_programa' => $id_programa]);
    }

    public function playPrograma($id_episodio, $id_programa){
        $apiurl = 'https://live-srtn.nayarit.gob.mx/api/episodios/'.$id_programa;
        $response = Http::withOptions(['verify' => false])->get($apiurl);
        $episodio_data = $response->json();

        $video_pre_url = $episodio_data[0]['path'];
        $video_url = str_replace("/usr/share/nginx/programas/", "https://live-srtn.nayarit.gob.mx/programas/", $video_pre_url);

        return view('play', ['episodio_data' => $episodio_data, 'real_path' => $video_url]);
    }
}
