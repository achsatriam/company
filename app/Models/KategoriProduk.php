<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    protected $table = 'kategori_produks';
    protected $primaryKey = 'id';
    protected $fillable = [ 'id','kategori_produk', 'foto'];

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
