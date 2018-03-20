<?php

namespace App\Http\Controllers\Registrar;
@session_start();
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoriaProducto;
use Storage;
use App\TipoProducto;
use App\Producto;
use APP\Imagenes;
use Laracasts\Flash\Flash; 

class ProductoController extends Controller
{
    public function index()
    {

        $producto = Producto::orderBy('id', 'ASC')->paginate(6);
        return view('backend.registrar.producto.index')->with('producto', $producto);

    }
    public function create(){
    	$categoriaproducto=CategoriaProducto::where('estatus','Activo')->orderBy('id')->get();
        $tipoproducto=TipoProducto::where('estatus','Activo')->orderBy('id')->get();
        return view('backend.registrar.producto.crear')->with('categoriaproducto',$categoriaproducto)->with('tipoproducto',$tipoproducto);
    }

    public function store(Request $request)
    {

        try {

            $descripcion = $request["descripcion"];
            //dd($descripcion);
            if(Producto::where('descripcion',$descripcion)->first()){

                return redirect()->route('producto.index')->with("notificacion","Categoría Ya se encuentra Registrada");

            }
            $producto = new Producto($request->all());
        
            if($request->archivo){
            $file = $request->file('archivo');
                
            $name_file = 'producto_'.time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/img/productos/';
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

    public function show($id)
    {
        $producto=Producto::find($id);
        $idcategoriaproducto = $producto->categoria_producto_id;
        $idtipoproducto = $producto->tipo_producto_id;
        $categoriaproducto=CategoriaProducto::where('id',$idcategoriaproducto)->first();
        $descategoria = $categoriaproducto->descripcion;
        $tipoproducto=TipoProducto::where('id',$idtipoproducto)->first();       
        $destipo = $tipoproducto->descripcion;
        return view('backend.registrar.producto.show')->with('producto',$producto)->with('descategoria',$descategoria)->with('destipo',$destipo);
    }

    public function edit($id)
    {
        //$id=decodifica($id);
        $producto=Producto::find($id);
        $idcategoriaproducto = $producto->categoria_producto_id;
        $idtipoproducto = $producto->tipo_producto_id;
        $categoriaproducto=CategoriaProducto::where('id',$idcategoriaproducto)->first();
        $descategoria = $categoriaproducto->descripcion;
        $tipoproducto=TipoProducto::where('id',$idtipoproducto)->first();       
        $destipo = $tipoproducto->descripcion;
        return view('backend.registrar.producto.edit')->with('producto',$producto)->with('descategoria',$descategoria)->with('destipo',$destipo);
    }

    public function update(Request $request, $id)
    {

        $producto = producto::find($id);

        $producto->fill($request->all());
        if ($request->file('archivo')) {
            $filename_old = $producto->imagen;
            $file = $request->file('archivo');
            $name = 'producto_'.time().'.'.$file->getClientOriginalExtension();    
            $path = public_path().'/img/productos/';
            File::delete($path . $filename_old);
            $file->move($path,$name);
            $producto->imagen = $name;
        } 
        $producto->save();
        return redirect()->route('producto.edit', $id)->with("notificacion","Se ha guardado correctamente su información");

    }

    public function destroy($id)
    {

        $producto= Producto::find($id);
        $producto->destroy($id);

        return redirect()->route('producto.index');
        
    }

    public function cargatipoproductos(Request $request)
    {
      $request->all();
      if(isset($request["id"])) $id=$request["id"];
      $tipoproducto = TipoProducto::where('categoria_producto_id',$id)->get();
      foreach ($tipoproducto as $tip) {
          echo '<option value="' .$tip->id. '">' .$tip->descripcion. '</option>';
      }
      return null;
  }
 public function galeria($id)
    {

        $producto= Producto::find($id);
        $categoria="1-"."$id";
        $ruta="imagenes.index,".$categoria;
        return redirect()->route('imagenes.index',$categoria);        

    }


}
