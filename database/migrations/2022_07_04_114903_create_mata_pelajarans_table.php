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
        Schema::create('mata_pelajaran', function (Blueprint $table) {
            $table->engine = 'innoDB';
            $table->string('kd_mapel');
            $table->string('nama', 55);
            $table->string('angka', 55);
            $table->string('huruf');
            $table->timestamps();
            $table->primary('kd_mapel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_pelajaran');
    }
};
