<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use Sluggable;

    protected $primaryKey = 'id_information';

    protected $casts = [
        'picture' => 'array', // Mengonversi kolom 'picture' menjadi array
    ];

    protected $dates = ['tanggal', 'created_at', 'updated_at'];

    /**
     * Konfigurasi Sluggable untuk kolom 'slug'.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
