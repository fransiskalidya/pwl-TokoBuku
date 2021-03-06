<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    
    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function pesananDetail() {
        return $this->hasMany('App\Models\PesananDetail','id_buku', 'id');
    }
}
