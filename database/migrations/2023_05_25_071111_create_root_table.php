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
        Schema::create('root', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('films', 255);
            $table->string('people', 255);
            $table->string('planets', 255);
            $table->string('species', 255);
            $table->string('starships', 255);
            $table->string('vehicles', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('root');
    }
};
