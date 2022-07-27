<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_pelanggan extends Model
{
    public function pelanggans(){
        return $this->belongsTo(pelanggan::class);
    }
}
