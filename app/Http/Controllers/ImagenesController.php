<?php

namespace App\Http\Controllers;
@session_start();
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imagenes;
use App\Producto;
use App\Servicio;
use APP\Galeria;
class ImagenesController extends Controller
{
	public function index($categoria)
	{
		list($cat,$tipo)=explode("-",$categoria); ;
		switch ($cat) {
    	case '1': #producto
    	$producto= Producto::find($tipo);
    	$texto = $producto->codigo." ".$producto->titulo;
    	$atras = "producto.index"
    	break;
    	case '2':
    	$servicio = Servicio::find($tipo);
    	$texto = $servicio->titulo;
    	$atras = "servicio.index"
    	case '3':
    	$galeria = Galeria::find($tipo);
    	$texto = $galeria->titulo;
    	$atras = "galeria.index"

    	default:
    		# code...
    	break;
    }
    $imagenes= Imagenes::where('categoria_imagen_id',$categoria)->where('tipo_id',$tipo)->paginate(6);
    return view('backend.imagenes.index')->with('texto',$texto)->with('imagenes',$imagenes)->with('categoria',$cat)->with('tipo',$tipo);
}

public function create($categoria,$tipo){
	return view('backend.imagenes.create')->with('categoria',$categoria)->with('tipo',$tipo);
}
public function store(Request $request)
{
	try {

		$imagenes = new Imagenes($request->all());
		
		if($request->archivo){
			$file = $request->file('archivo');
			$categoria = $request->categoria_imagen_id;
			if($categoria==1){    
				$name_file = 'producto_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/img/productos/';
			}
			if($categoria==2){
				$name_file = 'servicio_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/img/servicios/';

			}
			if($categoria==3){
				$name_file = 'galeria_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/img/galeria/';

			}
			if($categoria==4){
				$name_file = 'empresa_'.time().'.'.$file->getClientOriginalExtension();
				$path = public_path().'/img/empresa/';

			}
			if(!empty($file_temp)){
				unlink($path.$file_temp);  
			}            
			$file->move($path, $name_file);
			$producto->imagen = $name_file;
		}
		$producto->created_at = date('Y-m-d');
		$producto->updated_at = date('Y-m-d');
		$producto->usuario_id = $_SESSION["user"];
		$producto->save();
		return redirect()->route('producto.index')->with("notificacion","Se ha guardado correctamente su información");

	} catch (Exception $e) {
		\Log::info('Error creating item: '.$e);
		return \Response::json(['created' => false], 500);
	}


}
}
