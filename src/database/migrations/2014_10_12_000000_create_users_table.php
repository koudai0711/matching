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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->uuid('uuid')->unique()->comment('ハッシュ化したID');
            $table->string('name')->comment('名前');
            $table->string('name_kana')->comment('フリガナ');
            $table->string('nickname')->comment('ニックネーム');
            $table->integer('gender')->comment('性別');
            $table->date('birthday')->comment('生年月日');
            $table->string('tel')->comment('携帯電話番号');
            $table->string('password')->comment('パスワード');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('メール認証履歴');
            $table->string('residence')->comment('居住地');
            $table->boolean('admin_flag')->comment('管理者フラグ');
            $table->boolean('violator_flag')->comment('違反者フラグ');
            $table->boolean('age_check_flag')->comment('年齢確認フラグ');
            $table->boolean('is_deleted_flag')->comment('削除フラグ');
            $table->rememberToken()->comment('ログイン情報トークン');
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
        Schema::dropIfExists('users');
    }
};
