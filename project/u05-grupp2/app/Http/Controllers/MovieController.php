<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

//added for the form request
use App\Http\Requests\StoreMovie;
use Illuminate\Support\Str;

class MovieController extends Controller
{
    //RESTful method structure: index(), create(), store(), show(), edit(), update(), or destroy(). The routes should follow this structure also.
    public function index(){
        $this->authorize('isAdmin');      
        $movies = Movie::orderBy('id', 'desc')->paginate(); //without dollar goes in compact
        return view('movies.index', compact('movies'));
    }

    public function create(){
        $this->authorize('isAdmin');        
        return view('movies.create');
    }

    public function store(StoreMovie $request){
        $this->authorize('isAdmin');
        $movie = Movie::create($request->all());
        $slug = Str::slug($movie->title, '-');
        $movie->slug = $slug;
        // return redirect()->route('movies.show', $movie);//laravel no necesita $movie->id, laravel entiende que se le está pasando el id
        return redirect()->route('movies.index', $movie);//laravel no necesita $movie->id, laravel entiende que se le está pasando el id
    }

    public function show(Movie $movie){
        return view('movies.show', compact('movie'));
        // return view('movies.index', compact('movie'));
    }

    public function showFromWatchlist($id)
    {
        $movie = Movie::find($id);
        // dd($movie);
        return view('movies.show-from-watchlist', ['movie' => $movie]);
    }

    public function edit(Movie $movie){
        $this->authorize('isAdmin');
        return view('movies.edit', compact('movie'));
    }

    public function update(Movie $movie, Request $request){
        $this->authorize('isAdmin');

        /* VALIDACION */
        $request->validate([
            //rules of validation
            'title' => 'required', //atributo name del input name="title"
            'description' => 'required', //atributo name del input name="description"
            'year' => 'required', //atributo name del input name="year"
        ]);

        $movie->update($request->all()); //This method updates the registers and executes the method save
        $slug = Str::slug($movie->title, '-');
        $movie->slug = $slug;
        $movie->update($request->all()); //This method updates the registers and executes the method save

        // return redirect()->route('movies.show', $movie);
        return redirect()->route('movies.index', $movie);
    }

    public function destroy(Movie $movie){
        $this->authorize('isAdmin');
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
