<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $fillable = [
        'judul', 'slug', 'idk', 'isi', 'image'
    ];

    protected $primaryKey = 'id';
    protected $foreignkey = 'idk';
}
