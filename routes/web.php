<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('id','\d+');
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/administrar', 'HomeController@index')->name('home');
    Route::get('/administrar/home', 'HomeController@index')->name('home');
    Route::resource('categoriaimagen', 'configurar\Categoria_imagenController');
    Route::get('categoriaimagen/{id}/destroy', [
		'uses' => 'configurar\Categoria_imagenController@destroy',
		'as'   => 'categoriaimagen.destroy'
	]);
    Route::resource('categoriaproducto', 'configurar\Categoria_productoController');
    Route::get('categoriaproducto/{id}/destroy', [
		'uses' => 'configurar\Categoria_productoController@destroy',
		'as'   => 'categoriaproducto.destroy'
	]);

    Route::resource('categoriaservicio', 'configurar\Categoria_servicioController');
    Route::get('categoriaservicio/{id}/destroy', [
		'uses' => 'configurar\Categoria_servicioController@destroy',
		'as'   => 'categoriaservicio.destroy'
	]);

    Route::resource('categoriavideo', 'configurar\Categoria_videoController');
    Route::get('categoriavideo/{id}/destroy', [
		'uses' => 'configurar\Categoria_videoController@destroy',
		'as'   => 'categoriavideo.destroy'
	]);
    Route::resource('categoriadocumento', 'configurar\Categoria_DocumentoController');
    Route::get('categoriadocumento/{id}/destroy', [
		'uses' => 'configurar\Categoria_DocumentoController@destroy',
		'as'   => 'categoriadocumento.destroy'
	]);

    Route::resource('tipoproducto', 'configurar\Tipo_ProductoController');
    Route::get('tipoproducto/{id}/destroy', [
		'uses' => 'configurar\Tipo_ProductoController@destroy',
		'as'   => 'tipoproducto.destroy'
	]);

    Route::resource('documento', 'registrar\DocumentoController');
    Route::get('documento/{id}/destroy', [
		'uses' => 'registrar\DocumentoController@destroy',
		'as'   => 'documento.destroy'
	]);

    Route::resource('producto', 'registrar\ProductoController');
    Route::get('producto/{id}/destroy', [
		'uses' => 'registrar\ProductoController@destroy',
		'as'   => 'producto.destroy'
	]);
    Route::resource('servicio', 'registrar\ServicioController');
    Route::get('servicio/{id}/destroy', [
		'uses' => 'registrar\ServicioController@destroy',
		'as'   => 'servicio.destroy'
	]);

    Route::resource('video', 'registrar\VideoController');
    Route::get('video/{id}/destroy', [
		'uses' => 'registrar\VideoController@destroy',
		'as'   => 'video.destroy'
	]);

    Route::resource('galeria', 'GaleriaController');
    Route::get('galeria/{id}/destroy', [
		'uses' => 'GaleriaController@destroy',
		'as'   => 'galeria.destroy'
	]);
   Route::get('cargatipoproductos','registrar\ProductoController@cargatipoproductos');
   
   

   Route::get('imagenes/index/{categoria}/{tipo}', [
		'uses' => 'ImagenesController@index',
		'as'   => 'imagenes.index'
	]);
  Route::get('imagenes/create/{categoria}/{tipo}', [
		'uses' => 'ImagenesController@create',
		'as'   => 'imagenes.create'
	]); 
  Route::get('imagenes/show/{categoria}/{tipo}/{id}', [
		'uses' => 'ImagenesController@show',
		'as'   => 'imagenes.show'
	]); 

Route::resource('imagenes','ImagenesController');

Route::resource('empresa', 'configurar\EmpresaController');
Route::get('empresa/{id}/destroy', [
		'uses' => 'configurar\EmpresaController@destroy',
		'as'   => 'empresa.destroy'
	]);

});

Route::get('/', [
      'as'=>'frontend.index',
      'uses'=>'FrontendController@index' 
      ]);

Route::get('/nosotros', [
      'as'=>'frontend.nosotros',
      'uses'=>'FrontendController@nosotros' 
      ]);
