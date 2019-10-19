<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_luot_chois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('luot_choi_id');
            $table->foreign('luot_choi_id')->references('id')->on('luot_chois');
            $table->unsignedInteger('cau_hoi_id');
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hois');
            $table->string('phuong_an');
            $table->integer('diem');
            $table->timestamps();
            $table->softDeletes();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_luot_chois');
    }
}
