<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nguoithan extends Model
{
    protected $table = 'nguoithan';
    protected $fillable = [
        'manhanvien',
        'tenthannhan',
        'quanhe',
        'diachi',
        'sdt',
        'gioitinh',
        'nghenghiep',
    ];
}
