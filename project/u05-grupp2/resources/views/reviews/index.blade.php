@extends('layouts.app')

@section('titletab', 'reviews indexx') <!-- html tag, name -->

@section('content')
    
     <div class="container p-3 text-center">
        <h1 class="mb-3">Admin Dashboard</h1>
        <h4 class="mb-2">Reviews</h4>
    </div>


    @foreach ($reviews as $review)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ $review->movie->img_url }}" class="img img-rounded img-fluid" />
                        <p class="text-secondary text-center">29 december 2021</p>
                    </div>
                    <div class="col-md-8">
                        <h4>{{ $review->movie->title }}</h4>
                        <p>
                            <a class="float-left" href="">
                                <h5 class="card-title">{{ $review->title}}</h5>
                            </a>
                        </p>
                        
                        <p class="float-left"> {{ $review->user->username }} | <strong>{{ $review->rating }} <i class="fa fa-star" style="color: yellow"></i> </strong> </i></p>
                            
                        <div class="clearfix"></div>
                        <p>{{ $review->content }}</p>
                    </div>
                    <div class="col-md-2 my-auto mx-auto d-flex">
                            <div>
                            <form action="" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-thumbs-up"></i>
                                </button>
                            </form>
                            </div>
                            <div>
                            <form action="/reviews/{{ $review->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection