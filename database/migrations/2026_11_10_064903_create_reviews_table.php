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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->useCurrent();
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('rate');
            $table->text('review_text')->nullable();
            $table->integer('event_id');
            $table->foreign('event_id')->references('id')->on('events');
        });

        DB::statement('ALTER TABLE reviews ADD CONSTRAINT check_rate_range CHECK (rate BETWEEN 1 AND 5)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
