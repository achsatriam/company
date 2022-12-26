<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama_produk', 'harga', 'status','show', 'kategori_produk_id', 'foto', 'deskripsi'];

    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }
}
