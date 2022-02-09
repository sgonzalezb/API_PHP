@extends("layout")

@section("title","Edit Curso") 

@section("content")
    <h1>Edit curso</h1>

    <form method="POST" action="{{route("cursos.update", $curso)}}">

        @csrf
        
        @method("put")

        <label>
            Name:
            <br>
            <input value="{{old("name",$curso->name)}}" type="text" name="name">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Description:
            <br>
            <input value="{{old("description", $curso->description)}}" type="text" name="description">
        </label>

        @error('description')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection