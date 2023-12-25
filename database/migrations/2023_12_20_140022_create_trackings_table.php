<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('tgldaftar');
            $table->string('posisi');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('link');
            $table->string('proses');
            $table->string('keterangan')->nullable();
            $table->uuid('token')->unique()->default(Str::uuid());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
