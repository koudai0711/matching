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
        Schema::create('auth_small_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auth_large_category_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('大カテゴリID');
            $table->foreignId('auth_middle_category_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('中カテゴリID');
            $table->string('item')->comment('項目');
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
        Schema::dropIfExists('auth_small_category');
    }
};
