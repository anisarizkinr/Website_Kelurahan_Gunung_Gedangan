<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarKepengurusan extends Model
{
    use HasFactory;
    protected $table='gambar_kepengurusan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'gambar_so',
    ];
}
