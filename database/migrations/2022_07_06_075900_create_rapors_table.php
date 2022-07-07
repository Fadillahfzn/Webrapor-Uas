<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapor', function (Blueprint $table) {
            // $table->string('nisn_siswa');
            // $table->string('kd_mapel');
            // $table->integer('nilai');
            // $table->string('ket');
            // $table->timestamps();
            $table->engine = 'InnoDB';
            $table->string('nisn_siswa');
            $table->foreign('nisn_siswa')->references('nisn')->on('siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kode_matpel');
            $table->foreign('kode_matpel')->references('kd_mapel')->on('mata_pelajaran')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('nilai');
            $table->string('ket')->nullable();
            $table->string('predikat', 1);
            $table->timestamps();
            $table->primary(['nisn_siswa','kode_matpel']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rapor');
    }
};
