<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteTollboothTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_tollbooth', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tollbooth_id')->nullable();
            $table->foreign('tollbooth_id')->references('id')->on('tollbooths')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('route_id')->nullable();
            $table->foreign('route_id')->references('id')->on('routes')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('route_tollbooth');
    }
}
