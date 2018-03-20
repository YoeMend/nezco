<?php

namespace App\Http\Controllers\Registrar;
@session_start();
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriaServicio;
use Storage;
use App\Servicio;
use APP\Imagenes;
use Laracasts\Flash\Flash; 

class ServicioController extends Controller
{
    public function index()
    {

        $servicio = Servicio::orderBy('id', 'ASC')->paginate(6);
        return view('backend.registrar.servicio.index')->with('servicio', $servicio);

    }
    public function create(){
    	$categoriaservicio=CategoriaServicio::where('estatus','Activo')->orderBy('id')->get();
        return view('backend.registrar.servicio.crear')->with('categoriaservicio',$categoriaservicio);
    }

    public function store(Request $request)
    {

        try {

            $descripcion = $request["descripcion"];
            $detalles = $request["detalles"];
            $titulo = $request["titulo"];
            //dd($descripcion);
            if(Servicio::where('titulo',$titulo)->first()){

                return redirect()->route('servicio.index')->with("notificacion","Servicio Ya se encuentra Registrada");

            }
            $servicio = new Servicio($request->all());
        
            if($request->archivo){
            $file = $request->file('archivo');
                
            $name_file = 'servicio_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/img/servicios/';
            if(!empty($file_temp)){
            unlink($path.$file_temp);  
            }            
            $file->move($path, $name_file);
            $servicio->imagen = $name_file;
            }
            $servicio->detalles = $detalles;
            $servicio->descripcion = $descripcion;
            $servicio->created_at = date('Y-m-d');
            $servicio->updated_at = date('Y-m-d');
            $servicio->usuario_id = $_SESSION["user"];
            $servicio->save();
            return redirect()->route('servicio.index')->with("notificacion","Se ha guardado correctamente su información");

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function show($id)
    {
        $servicio=Servicio::find($id);
        $idcategoriaservicio = $servicio->categoria_servicio_id;
        $categoriaservicio=CategoriaServicio::where('id',$idcategoriaservicio)->first();
        $descategoria = $categoriaservicio->descripcion;
        return view('backend.registrar.servicio.show')->with('servicio',$servicio)->with('descategoria',$descategoria);
    }

    public function edit($id)
    {
        //$id=decodifica($id);
        $servicio=Servicio::find($id);
        $idcategoriaservicio = $servicio->categoria_servicio_id;
        $categoriaservicio=CategoriaServicio::where('id',$idcategoriaservicio)->first();
        $descategoria = $categoriaservicio->descripcion;
        return view('backend.registrar.servicio.edit')->with('servicio',$servicio)->with('descategoria',$descategoria);
    }

    public function update(Request $request, $id)
    {

        $servicio = Servicio::find($id);

        $servicio->fill($request->all());
        if ($request->file('archivo')) {
            $filename_old = $servicio->imagen;
            $file = $request->file('archivo');
            $name = 'servicio_'.time().'.'.$file->getClientOriginalExtension();    
            $path = public_path().'/img/servicios/';
            File::delete($path . $filename_old);
            $file->move($path,$name);
            $servicio->imagen = $name;
        } 
        $servicio->save();
        return redirect()->route('servicio.edit', $id)->with("notificacion","Se ha guardado correctamente su información");

    }

    public function destroy($id)
    {

        $servicio= Servicio::find($id);
        $servicio->destroy($id);

        return redirect()->route('servicio.index');
        
    }

}
