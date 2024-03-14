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
        Schema::create('inbox_attachments', static function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('gir_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('filename'); //FileName_Real
            $table->string('filename_fake')->nullable(); //FileName_Fake
            $table->string('mimetype')->nullable();
            $table->bigInteger('filesize');
            $table->string('temp_path')
                  ->nullable();
            $table->string('path')
                  ->nullable();
            $table->string('uniqid');
            $table->string('status')->default('available');
            $table->string('keterangan');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('people_role_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
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
