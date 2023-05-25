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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('cargo_capacity');
            $table->string('consumables', 255);
            $table->integer('cost_in_credits');
            $table->integer('crew');
            $table->double('length', 5, 2);
            $table->string('manufacturer', 255);
            $table->string('max_atmosphering_speed', 255);
            $table->string('model', 255);
            $table->string('name', 255);
            $table->json('pilots');
            $table->string('vehicle_class', 255);
            $table->integer('passengers');
            $table->date('created');
            $table->date('edited');
            $table->json('films');
            $table->string('url', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
