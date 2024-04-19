<?php

declare(strict_types=1);

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
        Schema::create('subject_details', static function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('subject_id');
            $table->string('name');
            $table->text('comment')->nullable();
            $table->text('action_comment')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('finish')->nullable();
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
