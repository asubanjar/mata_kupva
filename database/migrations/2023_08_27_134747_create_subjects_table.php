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
        Schema::create('subjects', function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('name');
            $table->text('comment')->nullable();
            $table->text('closed_comment')->nullable();
            $table->dateTime('opened');
            $table->dateTime('closed')->nullable();
            $table->unsignedBigInteger('subject_type_id');
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('subject_type_id')
            ->references('id')
            ->on('subject_types')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
