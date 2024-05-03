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
            $table->date('tgl_catat')->nullable();
            $table->string('pencatat')->nullable();
            $table->string('nama_anak')->nullable();
            $table->string('nik_anak')->nullable();
            $table->string('Child\'s_Age');
            $table->string('kondisi', 191)->nullable();
            $table->string('Sex');
            $table->string('alamat')->nullable();
            $table->string('provinsi', 191)->nullable();
            $table->string('Region', 191);
            $table->string('kecamatan', 191)->nullable();
            $table->string('kelurahan', 191)->nullable();
            $table->string('Type_of_Place');
            $table->string('posyandu',191)->nullable();
            $table->string('Birth_Order');
            $table->string('Twin_Child');
            $table->string('bb', 50)->nullable();
            $table->string('pb', 50)->nullable();
            $table->string('lk', 50)->nullable();
            $table->string('imd')->nullable();
            $table->string('nama_ibu', 191)->nullable();
            $table->string('Mother\'s_Age', 191);
            $table->string('Mother\'s_Working_Status');
            $table->string('Mother\'s_Education');
            $table->string('nama_ayah', 191)->nullable();
            $table->string('Father\'s_Education');
            $table->string('Drinking_Water');
            $table->string('Toilet_Types');
            $table->string('Wealth_Index');
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