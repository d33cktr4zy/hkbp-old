<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterUmat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_umat', function (Blueprint $table) {
            $table->string('umat_regid',20);
            $table->string('umat_namadepan',50);
            $table->string('umat_namabelakang',50);
            $table->string('umat_namatengah',50);
            $table->string('umat_alamat',255);
            $table->string('umat_nomorhp',20);
            $table->string('umat_tplahir',50);
            $table->date('umat_tglahir');
            $table->char('umat_goldarah',2);
            $table->char('umat_jk',2);
            $table->boolean('umat_baptis');
            $table->boolean('umat_sidi');
            $table->boolean('umat_menikah');
            $table->date('umat_tglmasuk');
            $table->boolean('umat_pindah');
            $table->boolean('umat_meninggal');
            $table->string('umat_pendidikan',20);
            $table->string('umat_tempatkerja',50);
            $table->string('umat_jabatankerja',50);
            $table->smallInteger('umat_wilayah')->unsigned();
            $table->smallInteger('umat_statusjemaat')->unsigned();
            $table->smallInteger('umat_jabatangereja')->unsigned();
            $table->smallInteger('umat_jabatanorgangereja')->unsigned();
            $table->string('umat_namaayah',50);
            $table->string('umat_namaibu',50);
            $table->string('umat_createby',10);
            $table->date('umat_createdt');
            $table->string('umat_modifyby',10);
            $table->date('umat_modifydt');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbmaster_umat');
    }
}
