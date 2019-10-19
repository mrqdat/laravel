<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCauHoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hois', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dap_an');
            $table->unsignedInteger("linh_vuc_id");
            $table->foreign("linh_vuc_id")->references('id')->on('linh_vucs');
            $table->string("loai");
            $table->string('phuong_an_A');
            $table->string('phuong_an_B');
            $table->string('phuong_an_C');
            $table->string('phuong_an_D');
            $table->boolean('xoa');
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
        Schema::dropIfExists('cau_hois');
    }
}
