<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribuidorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuidoras', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProveedor');
            $table->string('razonSocial');
            $table->string('numeroContacto');
            $table->string('ciudad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distribuidoras');
    }
}
