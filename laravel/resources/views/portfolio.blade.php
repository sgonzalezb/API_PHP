@extends("layout")

@section("title","Portfolio") 

@section("content")
    <h1>Portoflio</h1>

    <ul>
        @isset($portfolio)
            @foreach  ($portfolio as $item)
                <li>{{ $item["title"] }}</li>
            @endforeach
        @else
            <li>No hay proyectos</li>
        @endisset
    </ul>
    
@endsection