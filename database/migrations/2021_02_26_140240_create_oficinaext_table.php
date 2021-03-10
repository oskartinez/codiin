<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinaextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::create('OficinaExt', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OficinaExt');
        Schema::dropIfExists('UsuarioOfExt');
        Schema::dropIfExists('Perfil');
        
    }
}
