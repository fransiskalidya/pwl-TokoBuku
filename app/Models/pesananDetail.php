<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesananDetail extends Model
{
    use HasFactory;
    protected $table = 'pesanan_details';
    
    public function buku() {
        return $this->belongsTo('App\Models\Buku','id_buku', 'id');
    }

    public function pesanan() {
        return $this->belongsTo('App\Models\Pesanan','id_pesanan', 'id');
    }
}

