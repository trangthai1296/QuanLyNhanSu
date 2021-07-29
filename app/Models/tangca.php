<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tangca extends Model
{
    protected $table = 'tangca';
    protected $fillable = [
        'ngay',
        'manhanvien',
        'sogio'
    ];
}
