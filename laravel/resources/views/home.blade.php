@extends("layouts.app")

<!-- Se pueden pasar los yield de dos formas  -->
<!-- Directamente en la función section -->
@section("title","Home") 

<!-- O si es un bloque grande entre las anotaciones de section y endsection -->
@section("content")
    <h1>Home</h1>
@endsection