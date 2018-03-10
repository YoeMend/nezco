<?php

namespace App\Http\Controllers\configurar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriaImagen;

class Categoria_imagenController extends Controller
{
    public function index()
    {
        
        $categoriaimagen = CategoriaImagen::orderBy('id', 'ASC')->paginate(6);
        return view('backend.configurar.categoriaimagen.index')->with('categoriaimagen', $categoriaimagen);

    }
}
