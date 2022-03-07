<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth as FacadesAuth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //HERE MUST SHOW ONLY THE REVIEWS THAT APPROVED == 0
        $reviews = Review::all();
        return view('reviews.index', [
            'reviews' => $reviews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Movie $movie)
    {
        dd('hola');
        $request->validate(['title' => 'required']);
        $request->validate(['content' => 'required']);
        $request->validate(['rating' => 'required']);

        $review = Review::create([
            'user_id' => Auth::user()->id,         
            'movie_id' => $movie->id,
            'title' => $request->title,
            'content' => $request->content,
            'rating' => $request->rating,
        ]);
        return back();
        //return redirect('/reviews');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id)->first();

        return view('reviews.edit')->with('review', $review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'rating' => $request->input('rating'),
            ]);
        return redirect('/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        if ($review->user->id != Auth::user()->id) {
            abort(403);
        }
        if($review->user->role_id === 1){
            $review->delete();
        }
        $review->delete();
        //return redirect('reviews');
        return back();
    }
}