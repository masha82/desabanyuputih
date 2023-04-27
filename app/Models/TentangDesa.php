<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangDesa extends Model
{
    protected $table = 'tentangdesa';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['isi', 'foto_desa'];
}
