@extends('layouts.app')

@section('titletab', 'Watchlist') <!-- html tag, name -->

@section('content')

<style>
   @media only screen and (max-width: 767px) {
  img {
    width: 200px;
  }
} 
</style>

     <div class="container p-3 text-center">
        <h1 class="mb-3">Your Watchlist</h1>
    </div>

     @foreach ($watchlists as $movie)
          <div class="container card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md d-flex justify-content-center">
                        <img src="{{ $movie->movie_img }}" class="img img-rounded img-fluid "/>
                    </div>
                    <div class="col-md-9 mt-4 px-5">
                        <a class="float-left" href="{{route('show.from.watchlist', ['id'=> $movie->movie_id]) }}">
                            <h5 class="text-primary">{{ $movie->movie_title }}({{ $movie->movie_year }})</h5>
                        </a> 
                          <p class="float-left mt-3">{{ $movie->movie_duration }} | {{ $movie->movie_public }} | {{ $movie->movie_category }}</p> 
                        <p class="float-left"><strong>{{ $movie->movie_rating }} <i class="fa fa-star" style="color: #ffc107"></i></strong> </p>
                        <div class="clearfix"></div>
                        <p>{{ $movie->movie_description }}</p> 
                    </div>
                    <div class="col-md-1">
                         <div>     
                            <a class="btn btn-danger" href="{{ route('delete.watchlist.item',['id'=>$movie->id] ) }}">
                                <i class="far fa-trash-alt"></i> {{--red trash can --}}
                            </a>                     
                         </div>
                    </div> 
                </div>
            </div>
        </div>
    @endforeach
@endsection