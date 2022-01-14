@extends('layouts\app')

@section('content')

    <div>
        <h1>
            Voli
        </h1>

        @foreach ($trips as $trip)

            <p>
                Partenza {{ $trip->departure }}
            </p>

            <p>
                Destinazione {{ $trip->destination }}
            </p>

            <p>
                Compania aerea {{ $trip->airline }}
            </p>

            <p>
                Prezzo {{ $trip->price }} &euro;
            </p>

            <p>
                Data partenza {{ $trip->date }}
            </p>

        @endforeach
    </div>

@endsection
