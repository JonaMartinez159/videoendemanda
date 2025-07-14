<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Programas extends Controller
{
    public function show($id_programa){
        
        return view('ver', ['id_programa' => $id_programa]);
    }
}
