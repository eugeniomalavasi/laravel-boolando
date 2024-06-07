@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Home page </h1>
        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 ">
                @foreach ($products as $product)
                <img src="{{Vite::asset('resources/img/' . $product['frontImage'])}}" alt="{{$product['name']}}">
                    <p>{{$product['name']}}</p>
                @endforeach             
            </div>
        </div>
        </div>
    @endsection