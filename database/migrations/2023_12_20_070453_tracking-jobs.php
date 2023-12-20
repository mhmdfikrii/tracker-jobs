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
        Schema::create('tracking-jobs', function (Blueprint $table) {
            $table->id();
            $table->string('tgldaftar');
            $table->string('posisi');
            $table->string('nama_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('link');
            $table->string('proses');
            $table->string('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking-jobs');
    }
};
