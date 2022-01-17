@extends('layouts.app')

@section('content')
    <div>
        <h1>
            Blog
        </h1>

        <h3>
            <a href="{{ route('trips') }}">Trips</a>
        </h3>
        @foreach ($posts as $post)

            <h3>{{ $post->author }}</h3>
            <div class=" col">{{ $post->text }}</div>
            <div class="col">{{ $post->date }}</div>

        @endforeach

    </div>
@endsection
