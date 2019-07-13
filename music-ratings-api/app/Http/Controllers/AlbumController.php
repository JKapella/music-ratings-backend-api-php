<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    public function getAlbum(Album $album) 
    {
        return $album;
    }
}
