<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbaddWilayah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbadd_wilayah', function (Blueprint $table) {
            $table->smallInteger('wil_id');
            $table->string('wil_namawilayah',250);
            $table->string('wil_kodewilayah',250);
            $table->varchar('wil_createby',20);
            $table->date('wil_createdt');
            $table->varchar('wil_modifyby',20);
            $table->date('wil_modifydt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbadd_wilayah');
    }
}
