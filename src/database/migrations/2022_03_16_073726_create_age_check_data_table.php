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
        Schema::create('age_check_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('ユーザーID');
            $table->string('name')->comment('名前');
            $table->string('name_kana')->comment('フリガナ');
            $table->date('birthday')->comment('生年月日');
            $table->string('image')->comment('画像');
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
        Schema::dropIfExists('age_check_data');
    }
};
