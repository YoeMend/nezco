<?php

namespace App\Http\Controllers\Registrar;
@session_start();
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Galeria;
use APP\Imagenes;
use Laracasts\Flash\Flash; 

class GaleriaController extends Controller
{
    public function index()
    {

        $galeria = Galeria::orderBy('id', 'ASC')->paginate(6);
        return view('backend.registrar.galeria.index')->with('galeria', $galeria);

    }
    public function create(){
        return view('backend.registrar.galeria.create');
    }

    public function store(Request $request)
    {

        try {

            $titulo = $request["nombre"];
            $descripcion = $request["descripcion"];
            //dd($descripcion);
            if(Galeria::where('nombre',$titulo)->first()){

                return redirect()->route('Galeria.index')->with("notificacion","Galeria Ya se encuentra Registrado");

            }
            $galeria = new Galeria($request->all());
            $galeria->descripcion =$descripcion;    
            $galeria->created_at = date('Y-m-d');
            $galeria->updated_at = date('Y-m-d');
            $galeria->usuario_id = $_SESSION["user"];
            $galeria->save();
            return redirect()->route('galeria.index')->with("notificacion","Se ha guardado correctamente su información");

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function show($id)
    {
        $galeria=Galeria::find($id);
        return view('backend.registrar.galeria.show')->with('galeria',$galeria);
    }

    public function edit($id)
    {
        //$id=decodifica($id);
        $galeria=Galeria::find($id);
        return view('backend.registrar.galeria.edit')->with('galeria',$galeria);
    }

    public function update(Request $request, $id)
    {

        $galeria = Galeria::find($id);

        $galeria->fill($request->all());
        $galeria->save();
        return redirect()->route('galeria.edit', $id)->with("notificacion","Se ha guardado correctamente su información");

    }

    public function destroy($id)
    {

        $galeria= Galeria::find($id);
        $galeria->destroy($id);

        return redirect()->route('galeria.index');
        

    }

    public function cargatipoGalerias(Request $request)
    {
      $request->all();
      if(isset($request["id"])) $id=$request["id"];
      $tipoGaleria = TipoGaleria::where('categoria_Galeria_id',$id)->get();
      foreach ($tipoGaleria as $tip) {
          echo '<option value="' .$tip->id. '">' .$tip->descripcion. '</option>';
      }
      return null;
  }
 public function galeria($id)
    {

        $Galeria= Galeria::find($id);
        $categoria="1-"."$id";
        $ruta="imagenes.index,".$categoria;
        return redirect()->route('imagenes.index',$categoria);        

    }


}
