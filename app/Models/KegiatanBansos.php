<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KegiatanBansos extends Model
{
    protected $table = 'keg_bansos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tgl_keg', 'keterangan', 'tempat', 'id_kegiatan'];
    protected $attributes = ['id_kegiatan' => 7];
    protected $with = ['kegiatan'];

    public function kegiatan(): BelongsTo
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }
}
