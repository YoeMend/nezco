<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
	{
		return view('frontend.index');
	}
	
	public function nosotros()
	{
		return view('frontend.nosotros');
	}

	public function servicios()
	{
		return view('frontend.servicios');
	}
	public function productos()
	{
		return view('frontend.productos');
	}
	public function leyes()
	{
		return view('frontend.leyes');
	}
	public function galeria()
	{
		return view('frontend.galeria');
	}
	public function contacto()
	{
		return view('frontend.contacto');
	}
}
