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
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();
//
//            $table->bigInteger('user_id')->unsigned()->nullable();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            $table->foreign('user_id')->constrained();

//            $table->string('title');
            $table->string('title', 1000); // 2-й пар-р позволяет ввести 1000 символов
            $table->text('content');

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
