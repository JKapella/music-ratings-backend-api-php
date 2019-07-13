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

    /**
     * @return AlbumResourceCollection
     */
    public function index(): AlbumResourceCollection 
    {
        return new AlbumResourceCollection(Album::paginate());
    }

    public function store(Request $request) 
    {
        $request->validate([
            'artist' => 'required',
            'release' => 'required',
            'genre' => 'required',
            'other_genre' => 'required',
            'year' => 'required',
            'listened' => 'required',
            'rating' => 'required',
            'notes' => 'required',
        ]);

        $album = Album::create($request->all());

        return new AlbumResource($album);
    }
}
