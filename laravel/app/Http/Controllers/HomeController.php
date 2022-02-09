<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){ //Este nombre porque solo tiene que administrar una única ruta
        return "Bienvenido al home con controller";
    }
}
