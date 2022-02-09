<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //GET ALL
        $cursos = Curso::all();
        // $cursos = Curso::paginate(); para hacer paginación

        return view("curso.index", compact("cursos"));
    }

    public function create()
    {

        return view("curso.create");
    }

    public function store(Request $request)
    {

        $request->validate([
            "name" => "required",
            "description" => "required"
        ]);



        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->save();

        return redirect()->route("cursos.show", $curso->id);
    }

    public function show($id)
    // public function show(Curso $curso) //El modelo nos permite que simplemente pasando el id, el modelo hace un "find" con ese id y devuelve directamente el registro
    {
        $curso = Curso::find($id);


        return view("curso.show", compact("curso"));
    }

    public function edit(Curso $curso)
    {
        return view("curso.edit", compact("curso"));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            "name" => "required|max:10",
            "description" => "required|min:10"
        ]);


        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->save();

        return redirect()->route("cursos.show", $curso->id);
    }
}
