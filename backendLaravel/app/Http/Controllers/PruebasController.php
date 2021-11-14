<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

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
    
    public function probarOrm(){
        
        $posts = Post::all();
        $categorias  = Category::all();
        
        foreach ($categorias as $category){
            echo "<h1>".$category->name."</h1>";
            
            foreach ($category->posts as $post){
                //dentro del objeto categories llamamos al método post que extrae todos los post de allí
                 echo "<h1>".$post->title."</h1>";
                
            }
           
            echo '<hr>';
        }
        die(); // para que no espere una vista
    }
    
}
