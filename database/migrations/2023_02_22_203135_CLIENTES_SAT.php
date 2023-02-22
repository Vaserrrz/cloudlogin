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
        Schema::create('satclientes', function (Blueprint $table){
            $table->id('CLI_ID');
            $table->integer('CLI_CI_RIF');
            $table->string('CLI_RAZON');
            $table->string('CLI_DIRECCION');
            $table->string('CLI_DETALLE');
            $table->id('CLI_ENCARGADO_ID');
            $table->integer('CLI_TELF');
            $table->integer('CLI_TELF2');
            $table->integer('TELF_WHATSAPP');
            $table->integer('TELF_TELEGRAM');
            $table->string('CORREO')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('satclientes');
    }
};
