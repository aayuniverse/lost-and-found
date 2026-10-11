<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $primaryKey = 'id_laporan';

    protected $fillable = [
        'id_user',
        'jenis_laporan',
        'nama_barang',
        'deskripsi',
        'tanggal_kejadian',
        'status',
        'alasan_penolakan',
        'kontak',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_kejadian' => 'date',
        ];
    }

    public function pelapor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function foto(): HasMany
    {
        return $this->hasMany(
            FotoLaporan::class,
            'id_laporan',
            'id_laporan'
        );
    }

    public function konfirmasiKepemilikan(): HasMany
    {
        return $this->hasMany(
            KonfirmasiKepemilikan::class,
            'id_laporan',
            'id_laporan'
        );
    }
}
