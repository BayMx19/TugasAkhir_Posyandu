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
            $table->string('ni      k_anak')->nullable();
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
            $table->string('bb_u_analisa', 191)->nullable();
            $table->string('tb', 50)->nullable();
            $table->string('tb_u_analisa', 191)->nullable();
            $table->string('lk', 50)->nullable();
            $table->string('bb_tb_analisa', 191)->nullable();
            $table->string('nama_ibu', 191);
            $table->string('umur_ibu', 191)->nullable();

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