<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'artist',
            'release',
            'genre',
            'other_genre',
            'year',
            'listened',
            'rating',
            'notes',
    ];
}
