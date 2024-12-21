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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_siswa',20);
            $table->string('nama_siswa',40);
            $table->string('alamat_siswa',100);
            $table->string('nomorhp_siswa',20);
            $table->string('jk',20);
            $table->date('tanggal_lahir',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas_');
    }
};
