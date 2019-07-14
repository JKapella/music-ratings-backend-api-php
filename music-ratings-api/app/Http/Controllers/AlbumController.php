<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Http\Resources\AlbumResource;
use App\Http\Resources\AlbumResourceCollection;

class AlbumController extends Controller
{

    /**
     * The 'show'(get) route for a single album, indicated via id and album model
     * 
     * @param Album $album
     * 
     * @return AlbumResource
     */
    public function show(Album $album): AlbumResource
    {
        return new AlbumResource($album);
    }

    /**
     * The 'get all' route, returns paginated list of albums
     * 
     * @return AlbumResourceCollection
     */
    public function index(): AlbumResourceCollection 
    {
        return new AlbumResourceCollection(Album::paginate());
    }

    /**
     * The post route - simply verifies all fields are present and adds to db
     * 
     * @return AlbumResource - returns a copy of the album that's just been added
     */
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

    /**
     * The put method, updates the fields for a specified album entry
     * 
     *  @return Album $album - returns a copy of the data for the updated album
     */
    public function update(Album $album, Request $request): AlbumResource
    {
        $album->update($request->all());

        return new AlbumResource($album);
    }

    /**
     * The delete method, removes the entry for a specified album, indicated by id
     * 
     * @return - on sucess, returns an empty array
     */
    public function destroy(Album $album): array
    {
        $album->delete();

        return response()->json();
    }
}
