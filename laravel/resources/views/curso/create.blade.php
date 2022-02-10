@extends("layout")

@section("title","Curso") 

@section("content")
    <h1>Create curso</h1>


    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{route("cursos.store")}}">

        @csrf
        
        <label>
            Nombre:
            <br>
            <input value="{{old("name")}}" type="text" name="name">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripción:
            <br>
            <input value="{{old("description")}}" type="text" name="description">
        </label>

        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection