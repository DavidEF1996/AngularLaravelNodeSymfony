<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index(){
        $title = "animales";
        $array = ['gato', 'perro', 'tigre'];
        
        return view('ejemplo.index',array(
            'titulo' => $title,
            'animales' => $array
        ));
        //con el punto indico el nombre del fichero
    }
}
