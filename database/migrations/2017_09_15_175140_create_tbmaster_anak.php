<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_anak', function (Blueprint $table) {
            $table->varchar('anak_regid',20);
            $table->varchar('anak_idumat',20);
            $table->varchar('anak_idkk',20);
            $table->smallInteger('anak_anakke')->unsigned();
            $table->varchar('anak_createby',20);
            $table->date('anak_createdt');
            $table->varchar('anak_modifyby',20);
            $table->date('anak_modifydt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_anak');
    }
}
