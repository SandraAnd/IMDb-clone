<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function query(Request $request)
    {
        if ($request->has('search')) {
            // $movies = Movie::search($request->get('search'))->get(); //works bad
            $movies = Movie::query()
            ->where('title', 'LIKE', "%{$request->get('search')}%")
            ->orWhere('description', 'LIKE', "%{$request->get('search')}%")
            // ->get()
            ->paginate();

        } else {
            // $movies = Movie::get();
            $movies = Movie::all();
        }
        // $movies = Movie::orderBy('id', 'desc')->paginate(); //without dollar goes in compact
        return view('search.search', compact('movies'));
        //$movies->appends(['sort'=> 'id']);
        //  return view('movies.index', compact('movies'));
    }
}