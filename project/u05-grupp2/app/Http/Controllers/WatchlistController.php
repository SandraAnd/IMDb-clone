<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watchlist;
use Illuminate\Support\Str;
use App\Http\Requests\StoreWatchlist;
use Illuminate\Support\Facades\Auth;
use App\Models\Movie;

class WatchlistController extends Controller
{
    public function addToWatchlist($movieid)
    {

        if (Auth::user()) {
            $userid = Auth::user()->id;
            $watchlist = new Watchlist();
            $watchlist->user_id = $userid;
            $watchlist->movie_id = $movieid;
            $watchlist->save();
            return back();
        } else {
            redirect('/home');
        }
    }

    public function index()
    {
        /*   $watchlist = Watchlist::orderBy('id', 'desc')->paginate();
        return view('watchlists.index', compact('watchlists')); */
    }

    public function create()
    {
        // return view('watchlists.create');
    }

    public function store(Watchlist $request)
    {
        /*  $watchlist = Watchlist::create($request->all());
        $slug = Str::slug($watchlist->title, '-');
        $watchlist->slug = $slug;
        return redirect()->route('watchlists.show', $watchlist); */
    }

    public function show($id)
    {
        $showWatchlist = Watchlist::where('user_id', $id)
        ->select('watchlists.*', 'movies.id AS movie_id', 'movies.title AS movie_title',
        'movies.imageurl AS movie_img', 'movies.public AS movie_public','movies.year AS movie_year',
        'movies.duration AS movie_duration','movies.description AS movie_description',
        'movies.rating AS movie_rating','movies.category AS movie_category')
        ->join('movies', 'watchlists.movie_id', '=', 'movies.id')->get();
        return view('watchlists.show', ['watchlists' => $showWatchlist]);
    }

    public function edit(Watchlist $watchlist)
    {
        // return view('watchlists.edit', compact('watchlist'));
    }

    public function update(Watchlist $watchlist, Request $request)
    {
        /* $request->validate([
            'watchlisttitle' => 'required',
            'watchlistdescription' => 'required'
        ]);
        $watchlist->update($request->all());
        $slug = Str::slug($watchlist->watchlisttitle, '-');
        $watchlist->slug = $slug;
        $watchlist->update($request->all());
        return redirect()->route('watchlists.show', $watchlist); */
    }

    public function destroy($id)
    {
        $watchListItem = Watchlist::where('id', $id);
        $watchListItem->delete();
        return back();
    }
}