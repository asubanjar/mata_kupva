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
        Schema::create('actions', function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('subject_detail_id');
            $table->unsignedBigInteger('jabatan_id');
            $table->string('name');
            $table->text('comment')->nullable();
            $table->text('action_comment')->nullable();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('finish')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('subject_detail_id')
            ->references('id')
            ->on('subject_details')
            ->onDelete('cascade');

            $table->foreign('jabatan_id')
            ->references('id')
            ->on('jabatans')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actions');
    }
};
