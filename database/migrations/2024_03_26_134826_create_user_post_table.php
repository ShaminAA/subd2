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
        Schema::create('user_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_worker');
            $table->unsignedBigInteger('fk_post');
            $table->foreign('fk_worker')->references('id')->on('user');
            $table->foreign('fk_post')->references('id')->on('post');
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
