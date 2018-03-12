<?php

namespace App\Http\Controllers\configurar;
@session_start();

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CategoriaProducto;

class Categoria_productoController extends Controller
{
    public function index()
    {
        
        $categoriaproducto = CategoriaProducto::orderBy('id', 'ASC')->paginate(6);
        return view('backend.configurar.CategoriaProducto.index')->with('categoriaproducto', $categoriaproducto);

    }
    public function create(){
    	return view('backend.configurar.CategoriaProducto.crear');
    }

    public function store(Request $request)
    {
        
        try {

            $descripcion = $request["descripcion"];
            //dd($descripcion);
            if(CategoriaProducto::where('descripcion',$descripcion)->first()){
                
            return redirect()->route('CategoriaProducto.index')->with("notificacion","Categoría Ya se encuentra Registrada");

            }
            $CategoriaProducto = new CategoriaProducto($request->all());
	        $CategoriaProducto->created_at = date('Y-m-d');
	        $CategoriaProducto->updated_at = date('Y-m-d');
	        $CategoriaProducto->usuario_id = $_SESSION["user"];
	        $CategoriaProducto->save();
            return redirect()->route('categoriaproducto.index')->with("notificacion","Se ha guardado correctamente su información");

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function show($id)
    {
        $categoriaproducto=CategoriaProducto::find($id);
        return view('backend.configurar.CategoriaProducto.show')->with('categoriaproducto',$categoriaproducto);
        //
    }

    public function edit($id)
    {
        //$id=decodifica($id);
        $categoriaproducto=CategoriaProducto::find($id);
        return view('backend.configurar.CategoriaProducto.edit')->with('categoriaproducto',$categoriaproducto);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'descripcion' => 'required',
            ];

        try {
            $validator = \Validator::make($request->all(), $rules);
            if ($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            //$id=decodifica($id);

            $data=[
                'descripcion' => $request->descripcion,
                'estatus' => $request->estatus,
            ];
            CategoriaProducto::find($id)->update($data);
            return redirect()->route('CategoriaProducto.edit', codifica($id))->with("notificacion","Se ha guardado correctamente su información");

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function destroy($id)
    {
        
        $CategoriaProducto= CategoriaProducto::find($id);
        $CategoriaProducto->destroy($id);

            return redirect()->route('CategoriaProducto.index');
        
    }
}