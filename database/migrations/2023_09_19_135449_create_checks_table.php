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
        Schema::create('checks', function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('action_id');
            $table->string('name');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->text('closed_comment')->nullable();
            $table->dateTime('finish')->nullable();
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('action_id')
            ->references('id')
            ->on('actions')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checks');
    }
};
