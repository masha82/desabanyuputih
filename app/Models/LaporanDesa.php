<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanDesa extends Model
{
    protected $table = 'laporandesa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_laporan', 'tahun', 'file'];
}
