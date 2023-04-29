<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();

            $table->string('unidad');
            $table->string('linea');
            $table->string('placa');

            $table->string('asientos');

            $table->unsignedBigInteger('fuel_id')->nullable();
            $table->foreign('fuel_id')->references('id')->on('fuels')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('clasification_id')->nullable();
            $table->foreign('clasification_id')->references('id')->on('clasifications')->onDelete('set null')->onUpdate('cascade');

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
        Schema::dropIfExists('units');
    }
}
