<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basic_info_id');
            $table->integer('work_exp_id');
            $table->integer('education_id');
            $table->integer('skill_id');
            $table->mediumText('additional');
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
        Schema::dropIfExists('user_resumes');
    }
}
