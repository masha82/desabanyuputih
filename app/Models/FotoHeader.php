<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoHeader extends Model
{
    protected $table = 'fotoheader';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['foto'];
}
