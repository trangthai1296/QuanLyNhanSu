<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bangchamcong extends Model
{
    protected $table = 'bangchamcong';
    protected $fillable = [
        'ngay',
        'manhanvien',
        'checkin',
        'checkout'
    ];
}
