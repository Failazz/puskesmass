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
        Schema::create('laporan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_laporan')->unique();
            $table->string('usr_admin')->unique();
            $table->datetime('tanggal_publikasi');
            $table->string('judul');
            $table->text('isi');
            $table->binary('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_kegiatan');
    }
};
