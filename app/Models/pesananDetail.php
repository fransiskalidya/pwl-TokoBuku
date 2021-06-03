<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{
    use HasFactory;
    protected $table = 'pesananDetail';
    
    public function buku() {
        return $this->belongsTo(Buku::class);
    }

    public function pesanan() {
        return $this->belongsTo(Pesanan::class);
    }
}

