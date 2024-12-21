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
        Schema::create('administrasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('guru_id');
            $table->integer('siswa_id');
            $table->integer('mapel_id');
            $table->integer('biaya');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrasis');
    }
};
