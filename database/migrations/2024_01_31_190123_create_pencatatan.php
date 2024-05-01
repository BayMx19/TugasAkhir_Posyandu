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
        Schema::create('pencatatan', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_catat');
            $table->string('pencatat');
            $table->string('nama_anak');
            $table->string('nik_anak')->nullable();
            $table->string('umur');
            $table->string('kondisi', 191)->nullable();
            $table->string('jk')->nullable();
            $table->string('alamat')->nullable();
            $table->string('provinsi', 191)->nullable();
            $table->string('kota', 191)->nullable();
            $table->string('kecamatan', 191)->nullable();
            $table->string('kelurahan', 191)->nullable();
            $table->string('tipe_tt')->nullable();
            $table->string('posyandu',191)->nullable();
            $table->string('kelahiran_ke')->nullable();
            $table->string('kembar')->nullable();
            $table->string('bb', 50)->nullable();
            $table->string('pb', 50)->nullable();
            $table->string('lk', 50)->nullable();
            $table->string('imd')->nullable();
            $table->string('nama_ibu', 191);
            $table->string('umur_ibu', 191)->nullable();
            $table->string('ibu_bekerja');
            $table->string('pendidikan_ibu');
            $table->string('nama_ayah', 191);
            $table->string('pendidikan_ayah');
            $table->string('air_minum');
            $table->string('toilet');
            $table->string('index_kesejahteraan');
            $table->string('p_stunting')->nullable();
            $table->string('p_wasting')->nullable();
            $table->string('p_underweight')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pencatatan');
    }
};