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
        Schema::create('master_kader', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->comment('{"src":"master_users.id"}');
            $table->string('nama');
            $table->string('jabatan', 191);
            $table->date('tgl_gabung')->nullable();
            $table->string('alamat', 191)->nullable();
            $table->string('rt', 3)->nullable();
            $table->string('rw', 3)->nullable();
            $table->string('no_telp')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_kader');
    }
};