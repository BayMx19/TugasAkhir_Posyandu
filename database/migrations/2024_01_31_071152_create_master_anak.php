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
        Schema::create('master_anak', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_daftar');
            $table->string('pencatat', 191);
            $table->string('nama_anak', 191);
            $table->string('nik_anak', 16)->unique()->nullable();
            $table->string('tempat_lahir', 191)->nullable();
            $table->date('tgl_lahir');
            $table->string('umur');
            $table->string('kondisi', 191);
            $table->string('jk');
            $table->string('alamat')->nullable();
            $table->string('provinsi', 191)->nullable();
            $table->string('kota', 191)->nullable();
            $table->string('kecamatan', 191)->nullable();
            $table->string('kelurahan', 191)->nullable();
            $table->string('tipe_tt');
            $table->string('posyandu',191)->nullable();
            $table->string('kelahiran_ke');
            $table->string('kembar');
            $table->string('nama_ibu', 191);
            $table->string('nik_ibu', 16)->unique()->nullable();
            $table->date('tgl_lahir_ibu');
            $table->string('umur_ibu', 191)->nullable();
            $table->string('ibu_bekerja');
            $table->string('pendidikan_ibu');
            $table->string('nama_ayah', 191);
            $table->string('nik_ayah', 16)->unique()->nullable();
            $table->date('tgl_lahir_ayah');
            $table->string('umur_ayah', 191)->nullable();
            $table->string('ayah_bekerja');
            $table->string('pendidikan_ayah');
            $table->string('bb')->nullable();
            $table->string('pb')->nullable();
            $table->string('lk')->nullable();
            $table->boolean('imd')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_anak');
    }
};