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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('birth_year', 255);
            $table->string('eye_color', 255);
            $table->string('gender', 255);
            $table->string('hair_color', 255);
            $table->integer('height');
            $table->string('homeworld', 255);
            $table->integer('mass');
            $table->string('name', 255);
            $table->string('skin_color', 255);
            $table->json('species');
            $table->json('starships');
            $table->json('vehicles');
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
        Schema::dropIfExists('people');
    }
};
