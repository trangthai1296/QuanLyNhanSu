<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dottuyendung extends Model
{
    protected $table = 'dottuyendung';
    protected $fillable = [
        'ten',
        'maphongban',
        'machucvu',
        'soluong',
        'ngaybatdau',
        'ngayketthuc',
    ];
}
