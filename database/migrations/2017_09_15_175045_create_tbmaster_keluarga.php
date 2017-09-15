<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_keluarga', function (Blueprint $table) {
            $table->varchar('kk_regno',20);
            $table->varchar('kk_idumat',20);
            $table->boolean('kk_pindah');
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
        Schema::drop('tbmaster_keluarga');
    }
}
