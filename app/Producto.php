<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id','codigo','descripcion','categoria_producto_id','publico','estatus','usuario_id'];
    protected $guarded  = ['id'];

    public function user(){

    	return $this->belongsTo('App\User');
    }

}
