<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';

    protected $casts = [
        'tanggalLahir'  => 'date:d-m-Y',
    ];
    protected $hidden = [
        'created_at','updated_at',
    ];
}
