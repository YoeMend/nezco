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
    Route::resource('producto', 'registrar\ProductoController');
    Route::get('producto/{id}/destroy', [
		'uses' => 'registrar\ProductoController@destroy',
		'as'   => 'producto.destroy'
	]);

});