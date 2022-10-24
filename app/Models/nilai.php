<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table='nilai';

    protected $casts = [
        'tahunPelajaran'  => 'date:Y-m-d',
    ];
}
