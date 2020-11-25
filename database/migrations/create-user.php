<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('paswoord');
            $table->string('poste');
            $table->string('birthday');
            $table->string('website');
        });
    }

    // Table users = name(string), email(string), password(string), poste(string), birthday(string), website(string), phone(string), city(string), age(integer), degree(string), freelance(string), image(string)

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
