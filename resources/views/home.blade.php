@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="movie">
            @foreach ($movies as $movie)
                <div class="card ">
                    <h2>Titolo: {{ $movie->title }}</h2>
                    <h2>Titolo Originale: {{ $movie->original_title }}</h2>
                    <ul>
                        <li>{{ $movie->nationality }}</li>
                        <li>{{ $movie->date }}</li>
                        <li>{{ $movie->vote }}</li>

                    </ul>
                </div>
            @endforeach

        </div>
    </div>
@endsection
