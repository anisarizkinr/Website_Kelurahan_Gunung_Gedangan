<?php

namespace App\Models;
use App\Models\kategoris;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table='data';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'id_kategori',
        'judul',
        'isi_data',
        'keterangan'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id');
    }
}
