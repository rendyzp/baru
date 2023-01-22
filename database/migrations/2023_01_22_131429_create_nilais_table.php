<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string("id_mataPelajaran");
            $table->integer("latihanSoal1");
            $table->integer("latihanSoal2");
            $table->integer("latihanSoal3");
            $table->integer("latihanSoal4");
            $table->integer("ulanganHarian1");
            $table->integer("ulanganHarian2");
            $table->integer("ulanganTengahSemester");
            $table->integer("ulanganSemester");
            $table->integer("nilaiPerMataPelajaran");
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
        Schema::dropIfExists('nilais');
    }
}
