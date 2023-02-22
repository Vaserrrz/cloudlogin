<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Nivel', function (Blueprint $table){
            $table->id('NVUSR_ID');
            $table->string('NVUSR_DESCRIPTION');
            $table->integer('NVUSR_PERILES');
            $table->integer('NVUSR_PERMISOAGREGAR');
            $table->integer('NVUSR_PERMISOEDITAR');
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
};
