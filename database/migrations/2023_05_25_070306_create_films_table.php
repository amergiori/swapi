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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('characters');
            $table->date('created');
            $table->date('edited');
            $table->string('url', 255);
            $table->json('vehicles');
            $table->string('director', 255);
            $table->integer('episode_id');
            $table->text('opening_crawl');
            $table->json('planets');
            $table->string('producer', 255);
            $table->json('species');
            $table->json('starships');
            $table->string('title', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
