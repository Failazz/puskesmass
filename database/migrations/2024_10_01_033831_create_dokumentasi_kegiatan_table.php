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
        Schema::create('dokumentasi_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('id_dokumentasi')->unique();
            $table->string('usr_admin')->unique();
            $table->datetime('tanggal_publikasi');
            $table->string('judul');
            $table->text('isi');
            $table->binary('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumentasi_kegiatan');
    }
};
