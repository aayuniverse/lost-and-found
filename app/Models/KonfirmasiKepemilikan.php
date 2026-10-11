<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KonfirmasiKepemilikan extends Model
{
    protected $table = 'konfirmasi_kepemilikan';

    protected $primaryKey = 'id_konfirmasi';

    protected $fillable = [
        'id_laporan',
        'id_mahasiswa',
        'id_verifikator',
        'bukti_kepemilikan',
        'status_konfirmasi',
    ];

    public function laporan(): BelongsTo
    {
        return $this->belongsTo(
            Laporan::class,
            'id_laporan',
            'id_laporan'
        );
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_mahasiswa', 'id');
    }

    public function verifikator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_verifikator', 'id');
    }
}
