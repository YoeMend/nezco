<?php

namespace App\Http\Controllers\Registrar;
@session_start();
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriaProducto;
use App\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        
        $producto = Producto::orderBy('id', 'ASC')->paginate(6);
        return view('backend.registrar.producto.index')->with('producto', $producto);

    }
    public function create(){
    	$categoriaproducto=CategoriaProducto::orderBy('id')->get();
    	return view('backend.registrar.producto.crear')->with('categoriaproducto',$categoriaproducto);
    }

    public function store(Request $request)
    {
        
        try {

            $descripcion = $request["descripcion"];
            //dd($descripcion);
            if(CategoriaProducto::where('descripcion',$descripcion)->first()){
                
            return redirect()->route('producto.index')->with("notificacion","Categoría Ya se encuentra Registrada");

            }
            $producto = new Producto($request->all());
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

    public function show($id)
    {
        $producto=Producto::find($id);
        return view("backend.registrar.producto.show")->with("producto",$producto);
    }

    public function edit($id)
    {
        //$id=decodifica($id);
        $producto=Producto::find($id);
        return view('backend.registrar.producto.edit')->with('producto',$producto);
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
           

            $data=[
                'descripcion' => $request->descripcion,
                'estatus' => $request->estatus,
            ];
            CategoriaImagen::find($id)->update($data);
            return redirect()->route('producto.edit', codifica($id))->with("notificacion","Se ha guardado correctamente su información");

        } catch (Exception $e) {
            \Log::info('Error creating item: '.$e);
            return \Response::json(['created' => false], 500);
        }
    }

    public function destroy($id)
    {
        
        $producto= Producto::find($id);
        $producto->destroy($id);

         return redirect()->route('producto.index');
        
    }



}
