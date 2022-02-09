@extends("layout") 

@section("title","Curso de $curso->name") 

@section("content")
    <h1>Show curso {{$curso->name}}</h1>
    <h3>Descripción del curso : {{$curso->description}}</h3>
    <br>
    <a href="{{route("cursos.edit", $curso)}}">Editar curso</a>
@endsection