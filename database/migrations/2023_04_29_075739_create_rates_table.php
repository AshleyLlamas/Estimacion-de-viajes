<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();

            $table->decimal('peaje', 65, 2)->default(0);

            $table->unsignedBigInteger('tollbooth_id')->nullable();
            $table->foreign('tollbooth_id')->references('id')->on('tollbooths')->onDelete('set null')->onUpdate('cascade');

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
        Schema::dropIfExists('rates');
    }
}
