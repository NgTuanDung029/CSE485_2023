<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TacGia extends Model
{
    use HasFactory;

    protected $table = 'tacgia';

    public function baiViet()
    {
        return $this->hasMany(BaiViet::class, 'ma_tgia', 'ma_tgia');
    }

    public $timestamps = false;
    protected $primaryKey = 'ma_tgia';
}
