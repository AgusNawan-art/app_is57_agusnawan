<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    public function jenis_pelanggans(){
        return $this->hasOne(jenis_pelanggan::class,'id','jenis_pelanggans_id');
    }
}
