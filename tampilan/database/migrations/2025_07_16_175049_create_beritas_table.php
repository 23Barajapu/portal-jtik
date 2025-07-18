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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->text('ringkasan')->nullable();
            $table->string('gambar')->nullable();
            $table->date('tanggal');
            $table->unsignedBigInteger('kategori_berita_id');
            $table->timestamps();

            $table->foreign('kategori_berita_id')->references('id')->on('kategori_beritas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
