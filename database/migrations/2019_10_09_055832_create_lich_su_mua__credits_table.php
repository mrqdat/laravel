<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichSuMuaCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_su_mua__credits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger("nguoi_choi_id");
            $table->foreign("nguoi_choi_id")->references('id')->on('nguoi_chois');
            $table->unsignedInteger("goi_credit");
            $table->foreign("goi_credit")->references('id')->on('goi_credits');
            $table->integer("credit");
            $table->integer("so_tien");
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
        Schema::dropIfExists('lich_su_mua__credits');
    }
}
