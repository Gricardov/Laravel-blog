<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function indice(){
        return "Bienvenido";
    }

    public function create(){
        return "Creación";
    }

    public function show($curso){
        return "Mostrar";
    }
}
