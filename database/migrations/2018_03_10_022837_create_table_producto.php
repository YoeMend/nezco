<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',10);
            $table->string('nombre',200);
            $table->text('descripcion');
            $table->integer('categoria_producto_id')->index('categoria_producto_id_fk');
            $table->enum('publico',['Si','No']);
            $table->integer('usuario_id');
            $table->timestamps();
        });
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
