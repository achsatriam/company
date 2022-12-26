<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_blog', 'show', 'foto', 'deskripsi'];

    public function kategori_blog()
    {
        return $this->belongsTo(KategoriBlog::class);
    }
}
