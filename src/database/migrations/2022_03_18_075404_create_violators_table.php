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
        Schema::create('violators', function (Blueprint $table) {
            $table->id();
            $table->integer('to_user_id')->comment('報告されたユーザー');
            $table->integer('from_user_id')->comment('報告したユーザー');
            $table->string('content')->comment('違反内容');
            $table->string('point')->comment('違反箇所');
            $table->string('comment')->comment('通報内容');
            $table->boolean('violator_check_flag')->comment('違反者確認フラグ');
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
        Schema::dropIfExists('violators');
    }
};
