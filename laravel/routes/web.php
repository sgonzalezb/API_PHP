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


//Home
Route::view("/", "home")->name("home"); // Para peticiones crud (sin vistas) llamando al controllador

//Get All
Route::get("/curso", [CursoController::class, "index"])->name("cursos.index");

// Create
Route::get("/curso/create", [CursoController::class, "create"])->name("cursos.create");
Route::post("/curso/create", [CursoController::class, "store"])->name("cursos.store");

//Get One
Route::get("/curso/{curso}", [CursoController::class, "show"])->name("cursos.show");

//Update
Route::get("/curso/{curso}/edit", [CursoController::class, "edit"])->name("cursos.edit");
Route::put("/curso/{curso}/edit", [CursoController::class, "update"])->name("cursos.update");

//Delete
Route::delete("/curso/{curso}", [CursoController::class, "destroy"])->name("cursos.destroy");






// Route::view("/portfolio", "portfolio", compact('portfolio'))->name("portfolio");
// Route::view("/about", "about")->name("about");
// Route::view("/contacto", "contacto", ["nombre" => "Sergi"])->name("contacto");
// Route::get('hola/{nombre?}', function ($nombre) {
//     return "hola $nombre"; // Siempre es necesario pasar un parámetro si no dara un 404, si al parametro se le pone un interrogante ya no es obligatorio.
// });
