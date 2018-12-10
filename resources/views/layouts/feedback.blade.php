@extends('layouts.main')

@section('content')

    @foreach(App\Feedback::all() as $feed)
        <p>
        <h1>{{$feed->text}}</h1>
        </p>
        <p>
            Email: {{$feed->email}}
        </p>
        <p>
            Телефон: {{$feed->phone}}
        </p>
        <p>
            Instagram: {{$feed->instagram}}
        </p>
    @endforeach

@endsection
