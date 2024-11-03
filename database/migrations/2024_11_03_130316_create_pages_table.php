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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('text')->nullable();
            $table->text('image')->nullable();
            $table->text('image2')->nullable();
            $table->text('url')->nullable();
            $table->json('urlTitle')->nullable();
            $table->text('url2')->nullable();
            $table->json('urlTitle2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
