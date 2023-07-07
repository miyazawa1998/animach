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
        Schema::create('followings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザーID'); // 追加
            $table->unsignedBigInteger('following_user_id')->comment('フォローしている人のID'); // 追加
            $table->timestamps();
    
            $table->foreign('user_id')->references('id')->on('users'); //  追加
            $table->foreign('following_user_id')->references('id')->on('users'); // 追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followings');
    }
};
