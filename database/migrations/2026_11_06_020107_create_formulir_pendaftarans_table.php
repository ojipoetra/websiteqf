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
        Schema::create('formulirpendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10)->unique();
            $table->string('nik', 16)->unique();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('gender', ['L', 'P']);
            $table->string('agama');
            $table->text('alamat');
            $table->enum('jenjang', ['MTS', 'SMA']);
            $table->string('nama_ayah');
            $table->string('nik_ayah', 16);
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('telepon_ayah', 20);
            $table->string('nama_ibu');
            $table->string('nik_ibu', 16);
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('telepon_ibu', 20);
            $table->string('penghasilan_keluarga')->nullable();
            $table->string('nama_sekolah_asal');
            $table->string('tahun_kelulusan', 4);
            $table->text('alamat_sekolah_asal')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('akta_kelahiran')->nullable();
            $table->boolean('pernyataan')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirpendaftaran');
    }
};
