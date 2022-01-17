@extends('layouts.app')

@section('content')
    <main class="main">

        <div class="cont">
            <h1>
                Blog
            </h1>

            <h3>
                <a href="{{ route('trips') }}">Trips</a>
            </h3>
            <div class="conteni">

                @foreach ($posts as $post)
                    <div class="contenitore">

                        <h3 class="autore">{{ $post->author }}</h3>
                        <p class="paragrafo">{{ $post->text }}</p>
                        <div class="date">{{ $post->date }}</div>

                    </div>

                @endforeach

            </div>

        </div>
    </main>
@endsection
