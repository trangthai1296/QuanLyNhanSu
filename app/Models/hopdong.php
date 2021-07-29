<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hopdong extends Model
{
    protected $table = 'hopdong';
    protected $fillable = [
        'manhanvien',
        'luongcoban',
        'luongtangca',
        'phucap',
        'bhxh',
        'ngaybatdau',
        'ngayketthuc',
    ];
}
