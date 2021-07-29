<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phongban extends Model
{
    protected $table = 'phongban';
    protected $fillable = [
        'tenphongban',
        'matruongphong',
        'sdt',
        'diachi',
    ];
}
