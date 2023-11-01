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
        Schema::create('pemasukan_kas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pemasukan',50)
            ->nullable(false);
            $table->string('email_user',50)
            ->nullable(false);
            $table->unsignedBigInteger('id_kategori_pemasukan')
            ->nullable(false);
            $table->dateTime('tanggal_pemasukan')
            ->default('2023-01-01 00:00:00')->nullable(false);
            $table->integer('jumlah_pemasukan')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasukan_kas');
    }
};
