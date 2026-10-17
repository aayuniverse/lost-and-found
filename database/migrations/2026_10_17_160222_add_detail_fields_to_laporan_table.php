
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('laporan', function (Blueprint $table) {
            $table->string('warna_barang')->nullable();
            $table->string('lokasi_kejadian')->nullable();
            $table->string('waktu_kejadian')->nullable();
            $table->string('nama_pelapor')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('laporan', function (Blueprint $table) {
            $table->dropColumn([
                'warna_barang',
                'lokasi_kejadian',
                'waktu_kejadian',
                'nama_pelapor',
            ]);
        });
    }
};
