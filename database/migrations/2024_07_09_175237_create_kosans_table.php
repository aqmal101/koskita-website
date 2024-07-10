<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kosans', function (Blueprint $table) {
            $table->uuid();
            $table->string('nama_kosan');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('rating');
            $table->string('sisa_ruangan');
            $table->string('harga_per_bulan');
            $table->string('lokasi');
            $table->boolean('kamar_mandi_dalam')->default(true);
            $table->boolean('dapur_bersama')->default(true);
            $table->boolean('wifi')->default(true);
            $table->boolean('listrik')->default(true);
            $table->boolean('parkir_luas')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosans');
    }
};