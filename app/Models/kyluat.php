<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kyluat extends Model
{
    protected $table = 'kyluat';
    protected $fillable = [
        'manhanvien',
        'lydo',
        'hinhthuc',
        'ngaykyluat',
    ];
}
