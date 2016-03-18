<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('fonctionCHEF');
            $table->string('NomPrenomCHEF');
            $table->string('adresseCHEF');
            $table->string('emailCHEF');
            $table->string('telCHEF');

            $table->string('fonctionCON');
            $table->string('NomPrenomCON');
            $table->string('adresseCON');
            $table->string('emailCON');
            $table->string('telCON');

            $table->string('social');
            $table->string('type');
            $table->string('raison');
            $table->string('contexte');
            $table->string('objectif');
            $table->string('contraintes');

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
        Schema::drop('baps');
    }
}
