<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        //GET ALL
        $cursos = Curso::all();

        //GET ALL PAGINADO
        // $cursos = Curso::paginate(); para hacer paginación

        return view("curso.index", compact("cursos")); //Variable que le llega a la view
    }

    public function create()
    {

        // Petición GET solo muestra la view de create(formulario)
        return view("curso.create");
    }

    public function store(StoreCurso $request) //StoreCurso para validaciones con FormRequest
    {
        // Petición POST envía la request del Formulario.

        //Primeramente se realiza la validación que tenemos en StoreCurso (FormRequest);

        $curso = new Curso();

        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->save();

        return redirect()->route("cursos.show", $curso->id);
    }

    public function show($id)
    {
        // GET One, pasandole el id
        $curso = Curso::find($id);

        return view("curso.show", compact("curso")); //Se le pasa el "registro" completo de la base de datos
    }

    public function edit(Curso $curso)
    {
        //Método GET que mostrará el formulario para editar, con los valores que tiene el registro actualmente
        // utilizar la anotación @method("put") en el formulario ya que las etiquetas de Form solo tienen acción con get and post.

        return view("curso.edit", compact("curso"));
    }

    public function update(Request $request, Curso $curso)
    {

        //Método PUT que realizará la actualización con la request creada en el form

        $request->validate([
            "name" => "required|max:10",
            "description" => "required|min:10"
        ]);


        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->save();

        return redirect()->route("cursos.show", $curso->id);
    }

    public function destroy(Curso $curso)
    {
        // El botón de eliminar actua sobre este método (método DELETE dentro del form)
        $curso->delete();
        return redirect()->route("cursos.index");
    }
}
