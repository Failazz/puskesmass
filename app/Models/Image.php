<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';

    protected $casts = [
        'gambar' => 'array', // Agar kolom 'pictures' dibaca sebagai array
    ];
}
