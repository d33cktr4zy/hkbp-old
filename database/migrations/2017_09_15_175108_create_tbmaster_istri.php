<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterIstri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_istri', function (Blueprint $table) {
            $table->varchar('istri_regid',20);
            $table->varchar('istri_idumat',20);
            $table->varchar('istri_idkk',20);
            $table->smallInteger('istri_urut')->unsigned();
            $table->varchar('kk_createby',20);
            $table->date('kk_createdt');
            $table->varchar('kk_modifyby',20);
            $table->date('kk_modifydt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_istri');
    }
}
