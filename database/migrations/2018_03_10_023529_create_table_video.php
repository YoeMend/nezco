<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('video', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',200);
            $table->string('url',200);
            $table->integer('categoria_video_id')->index('categoria_video_id_fk');
            $table->enum('publico',['Si','No']);
            $table->integer('posicion');
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
