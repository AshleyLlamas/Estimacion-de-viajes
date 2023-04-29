<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();

            $table->dateTime('fecha');

            $table->unsignedBigInteger('ciudadOrigen_id')->nullable();
            $table->foreign('ciudadOrigen_id')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('ciudadDestino_id')->nullable();
            $table->foreign('ciudadDestino_id')->references('id')->on('cities')->onDelete('set null')->onUpdate('cascade');

            $table->unsignedBigInteger('unit_id')->nullable();
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('set null')->onUpdate('cascade');

            $table->decimal('precio', 65, 2)->default(0);

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
        Schema::dropIfExists('transports');
    }
}
