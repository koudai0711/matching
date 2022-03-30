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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->foreignId('user_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('ユーザーID');
            $table->foreignId('auth_large_category_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('大カテゴリID');
            $table->foreignId('auth_middle_category_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('中カテゴリID');
            $table->string('personal_data')->comment('個人情報');
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
        Schema::dropIfExists('user_profiles');
    }
};
