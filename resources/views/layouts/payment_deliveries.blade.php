@extends('layouts.main')

@section('content')

    @foreach(App\PaymentDeliveries::all() as $PaymentDelivery)
        <p>
            <h1>{{$PaymentDelivery->title}}</h1>
        </p>
        <p>
            {{$PaymentDelivery->text}}
        </p>
    @endforeach

@endsection
