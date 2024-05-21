@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
                <div class="ms-flip-card col-xxl-3 col-lg-4 col-md-6 col-sm-9 mb-4 mx-auto">

                    <div class="ms-flip-card-inner border">

                        <div class="ms-flip-card-front">
                            <img src="{{ $movie['thumb'] }}">
                        </div>

                        <div class="ms-flip-card-back p-3">
                            <div><span>Title: </span>{{ $movie->title }}</div>
                            <div><span>Original Title: </span>{{ $movie->original_title }}</div>
                            <div><span>Nationality: </span>{{ $movie->nationality }}</div>
                            <div><span>Date: </span>{{ $movie->date }}</div>
                            <div><span>Vote: </span>{{ $movie->vote }}</div>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
