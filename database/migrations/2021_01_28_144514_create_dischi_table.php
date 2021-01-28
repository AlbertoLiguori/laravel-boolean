<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDischiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dischi', function (Blueprint $table) {
            $table->id();
            $table->string('poster', 256);
            $table->string('title', 64);
            $table->string('author', 64);
            $table->enum('genre',['Pop', 'Rock', 'Jazz', 'Metal'] );
            $table->year('year');

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
        Schema::dropIfExists('dischi');
    }
}
