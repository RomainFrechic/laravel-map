<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimploniensTable extends Migration
{
  /**
     * Run the migrations.
     *
     * @return void
     */
  public function up()
  {
     Schema::create('simploniens', function (Blueprint $table){
        $table->increments('id');
        $table->string('nom');
        $table->string('prenom');
        $table->integer('codePostale');
        $table->integer('promo')->nullable();
        $table->string('punchline')->nullable(); 
        $table->string('github')->nullable();
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('site perso')->nullable();
        $table->string('cv')->nullable();
        $table->float('longitude')->nullable();
        $table->float('latitude')->nullable();


    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('simploniens');
  }

}
