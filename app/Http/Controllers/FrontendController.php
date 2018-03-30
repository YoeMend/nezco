<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CategoriaDocumentos;
use App\CategoriaProducto;
use App\Producto;
use App\Servicio;
use App\Empresa;
use App\Documentos;
use App\Galeria;
use App\Imagenes;

class FrontendController extends Controller
{
    public function index(){

    	$servicios = DB::table('servicio')-> where('publico','Si')->where('inicio','1')-> get();
    	$productos = DB::table('producto')-> where('publico','Si')->where('inicio','1')->orderby('posicion', 'ASC')-> get();
    	$logo_empresa   = DB::table('empresa')-> where('publico','Si')->where('estatus','Activo')-> get();

		return view('frontend.index')->with('servicios',$servicios)->with('productos',$productos)->with('logo_empresa',$logo_empresa);
	}
	
	public function nosotros(){
		return view('frontend.nosotros');
	}

	public function servicios(){

		$servicios = DB::table('servicio')
								-> where('publico','Si')
								//->leftJoin('producto', 'users.id', '=', 'posts.user_id')
								-> get();

		return view('frontend.servicios')->with('servicios',$servicios);
	}

	public function servicios_detail($categoriaid, $id){

		$servicio_detail = DB::table('servicio')->where('id', $id)->first();

		$imagenes = Imagenes::where('publico', 'Si')
					->where('categoria_imagen_id', $categoriaid)
					->where('tipo_id', $id)
					->get();

		//dd($imagenes);
		return view('frontend.servicios_detail')->with('servicio_detail',$servicio_detail)->with('imagenes',$imagenes);
	}
	
	public function productos(){

		$categorias_productos = DB::table('categoria_producto')
								-> where('estatus','Activo')
								-> get();

		$productos = DB::table('producto')->where('publico','Si')->get();

		$productosFilter = DB::table('categoria_producto')
							->join('producto', 'producto.categoria_producto_id', '=', 'categoria_producto.id')
							->select('categoria_producto.descripcion as categoria', 'producto.titulo', 'producto.descripcion as pdescripcion', 'categoria_producto.id as categoriaid' )
							->where('categoria_producto.estatus','Activo')
							->get();

//dd($productosFilter);
		return view('frontend.productos')->with('categorias_productos',$categorias_productos)->with('productos',$productos)->with('productosFilter',$productosFilter);
	}
	public function productos_detail($id){

		//$categoria_productos=DB::table('categoria_producto')

		$productos_detail = DB::table('producto')->where('id', $id)->first();

		return view('frontend.productos_detail')->with('productos_detail',$productos_detail);
	}
	public function leyes(){

		$categorias_documentos = DB::table('categoria_documentos')
								 -> where('estatus','Activo')
								 -> get();

		$documentos = DB::table('documentos')->where('publico', 'Si')->get();
		
		return view('frontend.leyes')->with('categorias_documentos', $categorias_documentos)->with('documentos', $documentos);
	}
	public function leyesF($id){

		$categorias_documentos = DB::table('categoria_documentos')
								 -> where('estatus','Activo')
								 -> get();

		$documentos = DB::table('documentos')->where('categoria_documento_id', $id)->get();

		return view('frontend.leyes')->with('categorias_documentos', $categorias_documentos)->with('documentos', $documentos);
	}

	public function documentDetail($id){

		$documentos = DB::table('documentos')->where('id', $id)->where('publico', 'Si')->first();

		return view('frontend.documentDetail')->with('documentos',$documentos);
	}
	public function galeriaFront(){

		$galerias = Galeria::where('publico','Si')->get();

		$imagenes = Galeria::find(1)->imagenesGalery()->where('categoria_imagen_id','=','3')->first();

		//$imagenes = Imagenes::where('publico', 'Si')->first();

		return view('frontend.galeria')->with('galerias', $galerias)->with('imagenes', $imagenes);
	}
	public function galeria_detail($id_categoria, $id_galeria){

		$imagenes = Imagenes::where('categoria_imagen_id',$id_categoria)->where('tipo_id',$id_galeria)->where('publico','Si')->get();

		$galerias = Galeria::where('publico','Si')->where('id', $id_galeria)->first();

		return view('frontend.galeria_detail')->with('imagenes',$imagenes)->with('galerias', $galerias);
	}
	public function contacto(){
		return view('frontend.contacto');
	}
	public function pruebas(){
		$productos = DB::table('producto')-> where('publico','Si')->where('inicio','1')->orderby('posicion', 'ASC')-> get();

		return view('frontend.pruebas')->with('productos',$productos);
	}
}
