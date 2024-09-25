@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>I fllms di Bollean</h2>
            </div>
            @foreach($movies as $movie)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">Director: {{ $movie->director }}</p>
                            <p class="card-text">Release Year: {{ $movie->release_year }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection