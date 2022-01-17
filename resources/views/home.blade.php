@extends('layouts\app')

@section('content')

    <div class="cont">
        <h1>
            Voli
        </h1>
        <h3>
            <a href="{{ route('blog') }}">Blog</a>
        </h3>
        <div class="voli">

            @foreach ($trips as $trip)

                <div>

                    <p>
                        Partenza: {{ $trip->departure }}
                    </p>

                    <p>
                        Destinazione: {{ $trip->destination }}
                    </p>

                    <p>
                        Compagnia aerea: {{ $trip->airline }}
                    </p>

                    <p>
                        Prezzo: {{ $trip->price }} &euro;
                    </p>

                    <p>
                        Data partenza: {{ $trip->date }}
                    </p>
                </div>

            @endforeach
        </div>
    </div>

@endsection
