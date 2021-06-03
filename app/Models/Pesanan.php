<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pesananDetail() {
        return $this->hasMany(pesananDetail::class);
    }
}


}
