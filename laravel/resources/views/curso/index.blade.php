@extends("layout")

@section("title","Curso") 

@section("content")
    <h1>Cursos</h1>
    <ul>
        @foreach ( $cursos as $item )
            <li>
                {{-- <a href="{{route("cursos.show")}}">{{ $item->name }}</a> --}}
                <a href="{{route("cursos.show", $item->id)}}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>

@endsection