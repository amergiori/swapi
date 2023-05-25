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
        Schema::create('species', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('average_height', 3, 2);
            $table->integer('average_lifespan');
            $table->string('classification', 255);
            $table->string('designation', 255);
            $table->string('eye_colors', 255);
            $table->string('hair_colors', 255);
            $table->string('homeworld', 255);
            $table->string('language', 255);
            $table->string('name', 255);
            $table->json('people');
            $table->json('films');
            $table->string('skin_colors', 255);
            $table->date('created');
            $table->date('edited');
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
        Schema::dropIfExists('species');
    }
};
