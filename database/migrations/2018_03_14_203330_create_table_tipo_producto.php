<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTipoProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tipo_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200);
            $table->integer('categoria_producto_id')->index('categoria_producto_id_fk');
            $table->enum('estatus',['Activo','Desactivado']);
            $table->integer('usuario_id');
            $table->timestamps();
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
