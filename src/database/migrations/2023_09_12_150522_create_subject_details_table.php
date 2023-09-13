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
        Schema::create('subject_details', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('subject_id');
            $table->string('name');
            $table->text('comment')->nullable();
            $table->text('action_comment')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('finish')->nullable();
            $table->boolean('is_done')->default(false);
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_details');
    }
};
