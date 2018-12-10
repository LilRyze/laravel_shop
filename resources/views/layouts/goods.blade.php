@extends('layouts.main')

@section('content')
    @foreach($goods as $good)
        <p><h1>{{$good->name}}</h1></p><hr><p>{{substr($good->description, 0, 200)}}...</p><hr><p><h2>{{$good->price}} UAH <button type="button" class="btn btn-dark";>Buy</button></h2></p><hr><br><br><br><br>
    @endforeach
    @endsection
