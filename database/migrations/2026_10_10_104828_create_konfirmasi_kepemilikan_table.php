
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konfirmasi_kepemilikan', function (Blueprint $table) {
            $table->id('id_konfirmasi');

            $table->foreignId('id_laporan')
                ->constrained('laporan', 'id_laporan')
                ->cascadeOnDelete();

            $table->foreignId('id_mahasiswa')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('id_verifikator')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->text('bukti_kepemilikan');
            $table->string('status_konfirmasi')
                ->default('Menunggu Verifikasi');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konfirmasi_kepemilikan');
    }
};
