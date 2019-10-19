<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_chois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("ten_dang_nhap");
            $table->string("mat_khau");
            $table->string("Email");
            $table->string("hinh_dai_dien");
            $table->integer("diem_cao_nhat");
            $table->integer("credit");
            $table->boolean("xoa");
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
        Schema::dropIfExists('nguoi_chois');
    }
}
