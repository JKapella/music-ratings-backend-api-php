<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Http\Resources\AlbumResource;
use App\Http\Resources\AlbumResourceCollection;

class AlbumController extends Controller
{

    /**
     * @param Album $album
     * @return AlbumResource
     */
    public function show(Album $album): AlbumResource
    {
        return new AlbumResource($album);
    }

    public function index(): AlbumResourceCollection 
    {
        return new AlbumResourceCollection(Album::paginate());
    }
}
