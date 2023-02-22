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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('email')->unique();
            $table->text('description')->nullable();
            $table->integer('Nivel')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('whatsapp')->nullable();
            $table->integer('telegram')->nullable();
            $table->integer('idempresa')->nullable();
            $table->integer('status')->nullable();
            $table->dateTime('ultima conexion')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('USUARIOS');
    }
};
