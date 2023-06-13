<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    use HasFactory;

    protected $table = 'baiviet';

    public function tacGia()
    {
        return $this->belongsTo(TacGia::class, 'ma_tgia', 'ma_tgia');
    }

    public function theLoai()
    {
        return $this->belongsTo(TheLoai::class, 'ma_tloai', 'ma_tloai');
    }

    public $timestamps = false;
    protected $primaryKey = 'ma_bviet';
}
