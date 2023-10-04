<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = ['id','gambar','status','nama_mobil','harga','bahan_bakar','jumlah_kursi','penumpang','tahun','transmisi','fasilitas'];
    protected $guarded = [];
    
}
