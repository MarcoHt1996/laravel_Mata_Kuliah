<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_matakuliah', function (Blueprint $table) {
            $table->id();
            $table->string("kodematkul",12);
            $table->string("matakuliah",50);
            $table->string("dosen",50);
            $table->string("ruang",10);
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
        Schema::dropIfExists('table_matakuliah');
    }
}