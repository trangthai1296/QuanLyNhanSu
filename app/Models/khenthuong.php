<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khenthuong extends Model
{
    protected $table = 'khenthuong';
    protected $fillable = [
        'manhanvien',
        'lydo',
        'hinhthuc',
        'ngaykhenthuong',
    ];
}
