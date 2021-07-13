<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('personalInfo');
            $table->string('field_or_specialty');
            $table->string('about_the_specialty');
            $table->string('name');
            $table->date('birthday')->nullable();
            $table->integer('age');
            $table->string('nationality');
            $table->string('address');
            $table->string('degree');
            $table->string('phone');
            $table->string('email');
            $table->string('spoken');
            $table->string('freelance');
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
        Schema::dropIfExists('abouts');
    }
}
