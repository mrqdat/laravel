<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_chois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger("nguoi_choi_id");
            $table->foreign("nguoi_choi_id")->references('id')->on('nguoi_chois');
            $table->integer("so_cau");
            $table->string("diem");
            $table->dateTime("ngay_gio");
            $table->softDeletes();
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
        Schema::dropIfExists('luot_chois');
    }
}
