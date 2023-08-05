<?php

namespace App\Models;
use App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table='kategoris';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama_kategori',
    ];
    public function data()
    {
        return $this->hasMany(Data::class, 'id');
    }
}
