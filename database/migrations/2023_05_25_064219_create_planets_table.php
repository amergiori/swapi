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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('climate', 255);
            $table->date('created');
            $table->integer('diameter');
            $table->date('edited');
            $table->json('films');
            $table->integer('gravity');
            $table->integer('orbital_period');
            $table->integer('population');
            $table->json('residents');
            $table->integer('rotation_period');
            $table->boolean('surface_water');
            $table->string('terrain', 255);
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
        Schema::dropIfExists('planets');
    }
};
