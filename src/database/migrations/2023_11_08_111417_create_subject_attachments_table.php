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
        Schema::create('subject_attachments', function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('subject_id')
                  ->nullable();
            $table->string('filename');
            $table->string('mimetype')->nullable();
            $table->bigInteger('filesize');
            $table->string('temp_path')
                  ->nullable();
            $table->string('path')
                  ->nullable();
            $table->string('uniqid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_attachments');
    }
};
