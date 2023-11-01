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
        Schema::create('pengeluaran_kas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pengeluaran',50)
            ->nullable(false);
            $table->string('email_user',50)
            ->nullable(false);
            $table->unsignedBigInteger('id_kategori_pengeluaran')
            ->nullable(false);
            $table->dateTime('tanggal_pengeluaran')
            ->default('2023-01-01 00:00:00')->nullable(false);
            $table->integer('jumlah_pengeluaran')->nullable(false);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluaran_kas');
    }
};
