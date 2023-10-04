<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama','gelar','pesan','gambar'];
    protected $guarded = [];

        public function relasitesti(){
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }

}
