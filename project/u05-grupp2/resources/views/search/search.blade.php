@extends('layouts.app')

@section('titletab', 'search') <!-- html tag, name -->

@section('content')
    <div class="container p-3">
        <h1 class="text-center">Search Results...</h1>
    </div>

    @foreach ($movies as $movie)
        <!--card Start-->
        <div class="container card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="https://d2iltjk184xms5.cloudfront.net/uploads/photo/file/423494/c657a7292357963ec602e05832e1edae-lookup.jpg" class="img img-rounded img-fluid" />
                        <p class="text-secondary text-center">{{ $movie->timestamps }}</p>
                    </div>
                    <div class="col-md-10">
                        <a class="float-left" href="">
                            <h5 class="card-title">{{ $movie->title }} (<span>{{ $movie->year }}</span>)</h5>                            
                        </a>
                        <p class="float-left mt-3"> {{ $movie->public }} | {{ $movie->rating }} <i class="text-warning fa fa-star"></i>| {{ $movie->category}}</p> 
                        <p class="float-left"><strong>7.8 <i class="text-warning fa fa-star"></i> </strong> <button type="button" class="btn btn-success btn-sm">84</button> Metascore</p>
                        <div class="clearfix"></div>
                        <p>{{ $movie->description }}</p>
                        {{-- <form action="">
                            <div class="form-group">
                                <label for="exampleSelect1" class="form-label mt-4">Add to a list</label>
                                <select class="form-select" id="exampleSelect1">
                                    <option>Watchlist</option>
                                    <option>Favorites</option>
                                </select>
                                <button type="submit" class="btn btn-outline-primary mt-3">Add</button>
                            </div>  
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
        <!--card End-->
    @endforeach

@endsection