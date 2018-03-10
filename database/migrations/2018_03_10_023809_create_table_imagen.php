<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('imagen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200);
            $table->string('url',200);
            $table->integer('categoria_imagen_id')->index('categoria_imagen_id_fk');
            $table->integer('tipo_id');
            $table->enum('publico',['Si','No']);
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
