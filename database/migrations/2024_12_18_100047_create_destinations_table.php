<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    public function up()
    {
        Schema::create('destination', function (Blueprint $table) {
            $table->increments('id_destination');
            $table->string('name_destination', 50);
            $table->string('address', 100)->nullable();
            $table->string('bmap', 50)->nullable();
            $table->string('thumbnail', 50)->nullable();
            $table->enum('status', ['Open', 'Close'])->nullable();
            $table->unsignedInteger('id_category')->nullable();
            $table->unsignedInteger('id_owner')->nullable();

            $table->foreign('id_category')->references('id_category')->on('category')->onDelete('cascade');
            $table->foreign('id_owner')->references('id_owner')->on('owner')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destination');
    }
};
