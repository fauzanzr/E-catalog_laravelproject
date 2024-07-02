<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = ['id'];

    public function umkm(){
        return $this->belongsTo(Umkm::class);
    }
    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id', 'id');
    }
}
