<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelSkillUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level__skill_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('skill_user_id');
            $table->unsignedBigInteger('level_id');

            $table->foreign('skill_user_id')->references('id')->on('skill_user');
            $table->foreign('level_id')->references('id')->on('levels');
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
        Schema::dropIfExists('level__skill_user');
    }
}
