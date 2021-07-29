<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = 'nhanvien';
    protected $fillable = [
        'hoten',
        'ngaysinh',
        'diachi',
        'gioitinh',
        'sdt',
        'cmnd',
        'tinhtrang',
        'hesoluong',
        'maphongban',
        'machucvu',
        'madotphongvan',
    ];
}
