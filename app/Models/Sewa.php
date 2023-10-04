<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    // protected $fillable = ['id','nama_mobil','nama_lengkap','no_handphone','email','kota_kabupaten','detail_alamat','jenis_layanan','tanggal_mulai_sewa','tanggal_selesai_sewa','upload_ktp','upload_sim','upload_tiket','rute_perjalanan','pesan_tambahan', 'total','status'];
    protected $guarded = [];

    public function relasiuser(){
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

    public function relasirute(){
        return $this->BelongsTo(Rute::class, 'rute_id', 'id');
    }
    public function relasidetail(){
        return $this->BelongsTo(Detail::class, 'detail_id', 'id');
    }
}
