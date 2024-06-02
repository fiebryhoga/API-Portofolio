<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('biodatas', function (Blueprint $table) {
        $table->id();
        $table->string('gretting');
        $table->string('name');
        $table->string('job');
        $table->text('description');
        $table->string('image');
        $table->string('contact');
        $table->string('quote');
        $table->text('descriptionQuote');
        $table->string('linkAnonymous');
        $table->string('linkedin');
        $table->string('dribble');
        $table->string('github');
        $table->string('instagram');
        $table->string('twitter');
        $table->string('email');
        $table->string('linkLinkedin');
        $table->string('linkDribble');
        $table->string('linkGithub');
        $table->string('linkInstagram');
        $table->string('linkTwitter');
        $table->string('linkEmail');
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
        Schema::dropIfExists('biodatas');
    }
}
