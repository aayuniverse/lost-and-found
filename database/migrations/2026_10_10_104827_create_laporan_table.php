
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('id_laporan');

            $table->foreignId('id_user')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('jenis_laporan');
            $table->string('nama_barang');
            $table->text('deskripsi');
            $table->date('tanggal_kejadian');
            $table->string('status')
                ->default('Menunggu Verifikasi');
            $table->text('alasan_penolakan')->nullable();
            $table->string('kontak');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
