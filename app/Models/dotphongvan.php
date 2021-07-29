<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dotphongvan extends Model
{
    protected $table = 'dotphongvan';
    protected $fillable = [
        'madottuyendung',
        'ten',
        'soluong',
        'diadiem',
        'ngaybatdau',
        'ngayketthuc',
    ];
}
