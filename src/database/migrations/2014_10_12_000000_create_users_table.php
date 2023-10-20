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
        Schema::create('users', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->string('unit_organisasi')->nullable();
            $table->string('position');
            $table->string('jabatan_code')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->string('atasan_code')->nullable();
            $table->string('nip')->nullable();
            $table->string('approval_name')->nullable();
            $table->string('email')->nullable();
            $table->string('nik')->nullable();
            $table->string('phone')->nullable();
            $table->string('golongan')->nullable();
            $table->string('user_id')->nullable();
            $table->string('active')->default(true);
            $table->string('simpeg_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('jabatan_code')
            ->references('code')
            ->on('jabatans')
            ->onUpdate('cascade');

            $table->foreign('group_id')
            ->references('id')
            ->on('groups')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
