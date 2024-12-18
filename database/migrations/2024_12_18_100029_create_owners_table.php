<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateownersTable extends Migration
{
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->increments('id_owner');
            $table->string('name_owner', 50);
            $table->string('avatar', 50)->nullable();
            $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable();
            $table->string('no_telepon', 15)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('owner');
    }
};
