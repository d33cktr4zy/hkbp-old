<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbaddJabatangereja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbadd_jabatangereja', function (Blueprint $table) {
            $table->smallInteger('jabg_id')->unsigned();
            $table->varchar('jabg_namajabatan',255);
            $table->varchar('jabg_keterangan',255);
            $table->varchar('jabg_createby',20);
            $table->date('jabg_createdt');
            $table->varchar('jabg_modifyby',20);
            $table->date('jabg_modifydt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbadd_jabatangereja');
    }
}
