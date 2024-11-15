<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    use Sluggable;

    protected $table = 'article';

    protected $primaryKey = 'id_article';

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
