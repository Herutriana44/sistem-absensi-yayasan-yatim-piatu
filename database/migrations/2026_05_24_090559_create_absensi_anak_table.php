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
        Schema::create('absensi_anak', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anak_asuh_id')->constrained('anak_asuh');
            $table->foreignId('kegiatan_anak_id')->constrained('kegiatan_anak');
            $table->foreignId('user_id')->constrained('users');
            $table->date('tanggal');
            $table->time('waktu_absen');
            $table->enum('status_kehadiran', ['Hadir', 'Izin', 'Sakit', 'Alpha']);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_anak');
    }
};
