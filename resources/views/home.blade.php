@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-4 col-sm-6 col-lg-4">
                    @include('partials.product-card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
