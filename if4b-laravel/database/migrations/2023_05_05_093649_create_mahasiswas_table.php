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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id');
            $table->char('npm', 10)->unique();
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('kota_lahir');
            $table->string('foto');
            $table->uuid('prodi_id');
            $table->foreign('prodi_id')->references('id')
            ->on('prodi')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
