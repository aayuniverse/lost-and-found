<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FotoLaporan extends Model
{
    protected $table = 'foto_laporan';

    protected $primaryKey = 'id_foto';

    protected $fillable = [
        'id_laporan',
        'url_foto',
    ];

    public function laporan(): BelongsTo
    {
        return $this->belongsTo(
            Laporan::class,
            'id_laporan',
            'id_laporan'
        );
    }
}
