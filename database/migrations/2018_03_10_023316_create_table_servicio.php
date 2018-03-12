<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableServicio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',10);
            $table->string('nombre',200);
            $table->text('descripcion');
            $table->integer('categoria_servicio_id')->index('categoria_servicio_id_fk');
            $table->enum('publico',['Si','No']);
            $table->integer('usuario_id');
            $table->timestamps();
        });    }

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
