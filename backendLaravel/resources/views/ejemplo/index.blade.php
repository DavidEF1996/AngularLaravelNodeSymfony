/*
    Aquí llegan las variables desde el controlador
*/
<h1>{{$titulo}}</h1>

<ul>
    
    @foreach($animales as $animal)
    <li>{{$animal}}</li>
    @endforeach
</ul>