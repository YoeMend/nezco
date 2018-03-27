<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
		return view('frontend.index');
	}
	
	public function nosotros(){
		return view('frontend.nosotros');
	}

	public function servicios(){
		return view('frontend.servicios');
	}
	public function servicios_detail(){
		return view('frontend.servicios_detail');
	}
	public function productos(){
		return view('frontend.productos');
	}
	public function productos_detail(){
		return view('frontend.productos_detail');
	}
	public function leyes(){
		return view('frontend.leyes');
	}
	public function galeria(){
		return view('frontend.galeria');
	}
	public function galeria_detail(){
		return view('frontend.galeria_detail');
	}
	public function contacto(){
		return view('frontend.contacto');
	}
	public function pruebas(){
		return view('frontend.pruebas');
	}
}
