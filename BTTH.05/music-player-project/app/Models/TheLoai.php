<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;

    protected $table = 'theloai';

    public function baiViet()
    {
        return $this->hasMany(BaiViet::class, 'ma_tloai', 'ma_tloai');
    }

    public $timestamps = false;
    protected $primaryKey = 'ma_tloai';
}
