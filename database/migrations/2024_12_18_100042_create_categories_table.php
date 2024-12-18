<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id_category');
            $table->string('name_category', 50);
            $table->string('description', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
    }
};
