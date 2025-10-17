<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('pengumumans', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); // judul pengumuman
            $table->text('isi'); // isi atau konten pengumuman
            $table->string('gambar')->nullable(); // opsional: gambar pengumuman
            $table->date('tanggal')->nullable(); // tanggal pengumuman (opsional)
            $table->string('penulis')->nullable(); // nama penulis/pembuat pengumuman (opsional)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Undo migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumumans');
    }
};
