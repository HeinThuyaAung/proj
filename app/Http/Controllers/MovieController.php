<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = Movie::paginate(5);
        return view("movie.index", compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("movie.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(Movie::$rules);
        $movie=Movie::create([
            'moviename'=>$request->moviename,
            'movietype'=>$request->movietype,
            'description'=>$request->description,
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate
        ]);
         if (isset($request->avatar)) {
            $movie->addMediaFromRequest('avatar')->toMediaCollection();
        }
        $movie->save();
        return redirect()->route("movies.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        dd($movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view("movie.edit", compact("movie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
        $request->validate(Movie::$rules);
        $movie=Movie::update([
            'moviename'=>$request->moviename,
            'movietype'=>$request->movietype,
            'description'=>$request->description,
            'startdate'=>$request->startdate,
            'enddate'=>$request->enddate
        ]);
         if (isset($request->avatar)) {
            $movie->addMediaFromRequest('avatar')->toMediaCollection();
        }
        $movie->save();
        return redirect()->route("movies.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
        $movie->delete();
        return redirect()->route("movies.index");
    }
}
