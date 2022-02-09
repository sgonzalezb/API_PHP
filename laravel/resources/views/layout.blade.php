<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Por defecto")</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route("home")}}">Home</a></li>
            <li><a href="{{route("cursos.index")}}">Cursos</a></li>
            <li><a href="{{route("cursos.create")}}">Crear curso</a></li> 
            {{-- Los enlaces se recomienda usar name, por  si luego hay una refactorización de la ruta NO es necesario cambiar todos los enlaces ya que van asignados a un nombre fijo --}}
        </ul>
    </nav>

    <div class="content">
        @yield("content")
    </div>
</body>
</html>