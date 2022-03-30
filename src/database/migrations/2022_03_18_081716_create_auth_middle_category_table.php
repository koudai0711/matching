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
        Schema::create('auth_middle_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('auth_large_category_id')->cascadeOnUpdate()->cascadeOnDelete()->comment('大カテゴリID');
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
        Schema::dropIfExists('auth_middle_category');
    }
};
