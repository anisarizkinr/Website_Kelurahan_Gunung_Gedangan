<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatarGambar extends Model
{
    use HasFactory;
    protected $table='latar_gambar';
    protected $primaryKey = 'id';

    protected $fillable = [
        'gambar_latar',
    ];
}
