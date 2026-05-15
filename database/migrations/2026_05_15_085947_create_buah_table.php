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
        Schema::create('buah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buah',50);
            $table->string('jenis_buah');
            $table->integer('jumlah_buah');
            $table->string('kondisi_buah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buah');
    }
};
