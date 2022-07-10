<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;

class MoviesController extends Controller
{
    //get all movies
    public function index()
    {
        return MovieResource::collection(Movie::all());
    }
    //get a single movies
    public function show($id)
    {
        return new MovieResource(Movie::findOrFail($id));
    }
    //store a new movie
    public function store(MovieRequest $request)
    {
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->storyline = $request->storyline;
        $movie->language = $request->language;
        $movie->box_office = $request->box_office;
        $movie->release_date = $request->release_date;
        $movie->rating = $request->rating;
        $movie->runtime = $request->runtime;
        $movie->save();

        return response()->json(['message' => 'Movie created successfully']);

    }

    public function update(MovieRequest $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->name = $request->name;
        $movie->storyline = $request->storyline;
        $movie->language = $request->language;
        $movie->box_office = $request->box_office;
        $movie->release_date = $request->release_date;
        $movie->rating = $request->rating;
        $movie->runtime = $request->runtime;
        $movie->save();

        return response([
            'data' => $movie,
            'message' => 'Movie updated successfully'
        ], 200);
    }

    public function delete($id)
    {
        $MovieID = Movie::findOrFail($id);
        $MovieID->delete();

        return response([
            'data' => $MovieID,
            'message' => 'Movie deleted successfully'
        ], 200);
    }
}
