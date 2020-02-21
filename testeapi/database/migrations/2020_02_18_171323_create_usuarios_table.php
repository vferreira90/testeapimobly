<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            
            $table->bigInteger('id');
            $table->string('name');
            $table->string('username');
            $table->string('email');

            //$table->string('address');
            
            $table->string('street');
            $table->string('suite');
            $table->string('city');
            $table->string('zipcode');
            
            $table->string('geolat');
            $table->string('geolng');

            $table->string('phone');
            $table->string('website');

            //$table->string('company');
            $table->string('compname');
            $table->string('catchphrase');
            $table->string('bs');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
