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
        Schema::create('starships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('MGLT', 255);
            $table->integer('cargo_capacity');
            $table->string('consumables', 255);
            $table->integer('cost_in_credits');
            $table->double('hyperdrive_rating', 3, 2);
            $table->integer('crew');
            $table->integer('length');
            $table->string('manufacturer', 255);
            $table->string('model', 255);
            $table->string('max_atmosphering_speed', 255);
            $table->string('name', 255);
            $table->json('pilots');
            $table->integer('passengers');
            $table->string('starship_class', 255);
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
        Schema::dropIfExists('starships');
    }
};
