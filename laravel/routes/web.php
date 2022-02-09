<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use League\CommonMark\Parser\CursorState;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('contactame', function () {
//     $nombre = "toni";
//     // return view("contacto")->with("nombre",$nombre);// Para pasar variables a la vista.
//     return view("contacto", compact("nombre"));// Otra forma de pasar variables a la vista.
// })->name("contactanos");

$portfolio = [
    ["title" => "Proyecto 1"],
    ["title" => "Proyecto 2"],
    ["title" => "Proyecto 3"],
    ["title" => "Proyecto 4"],
];


Route::view("/", "home")->name("home"); // Para peticiones crud (sin vistas) llamando al controllador
Route::get("/curso", [CursoController::class,"index"])->name("cursos.index");
Route::get("/curso/create", [CursoController::class,"create"])->name("cursos.create");
Route::post("/curso/create", [CursoController::class, "store"])->name("cursos.store");
Route::get("/curso/{curso}", [CursoController::class,"show"])->name("cursos.show");

//Update
Route::get("/curso/{curso}/edit", [CursoController::class,"edit"])->name("cursos.edit");
Route::put("/curso/{curso}/edit", [CursoController::class,"update"])->name("cursos.update");



// Route::view("/portfolio", "portfolio", compact('portfolio'))->name("portfolio");
// Route::view("/about", "about")->name("about");
// Route::view("/contacto", "contacto", ["nombre" => "Sergi"])->name("contacto");
// Route::get('hola/{nombre?}', function ($nombre) {
//     return "hola $nombre"; // Siempre es necesario pasar un parámetro si no dara un 404, si al parametro se le pone un interrogante ya no es obligatorio.
// });
