<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterDll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_dll', function (Blueprint $table) {
            $table->varchar('dll_regno',20);
            $table->varchar('dll_idkk',20);
            $table->varchar('dll_idumat',20);
            $table->smallInteger('dll_nourut');
            $table->varchar('dll_createby',20);
            $table->date('dll_createdt');
            $table->varchar('dll_modifyby',20);
            $table->date('dll_modifydt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_dll');
    }
}
