<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('worker_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('worker_id')->references('id')->on('workers');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->double('share_bet')->nullable()->default(0.00)->comment('Must be between 0 and 1');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_post');
    }
};
