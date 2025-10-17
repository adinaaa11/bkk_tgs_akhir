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
    Schema::create('perusahaans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('kategori')->nullable(); // contoh: UMKM, Nasional, Internasional
        $table->string('alamat');
        $table->year('tahun_gabung')->nullable();
        $table->boolean('mou')->default(false);
        $table->string('logo')->nullable(); // upload logo perusahaan
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaans');
    }
};
