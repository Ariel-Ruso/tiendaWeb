<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->increments('id');
            $table->text('ClaveTrans');
            $table->text('PaypalDatos');
            $table->datetime('Fecha');
            $table->string('Email');
            $table->float('Total');
            $table->string('Estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
