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
        Schema::create('duels', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger('id_first');
            $table->unsignedSmallInteger('id_second');
            $table->unsignedTinyInteger('score_first');
            $table->unsignedTinyInteger('score_second');
            $table->float('raiting_first');
            $table->float('raiting_second');
            $table->Integer('id_tournament')->nullable();
            $table->unsignedTinyInteger('index_match')->nullable();
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
        Schema::dropIfExists('duels');
    }
};