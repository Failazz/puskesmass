<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use Sluggable;

    protected $primaryKey = 'id_news';
    
    protected $casts = [
        'picture' => 'array', // Mengonversi kolom 'picture' menjadi array
    ];

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
