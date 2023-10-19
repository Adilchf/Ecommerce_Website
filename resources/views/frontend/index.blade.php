@extends('layouts.front')

@section('title')
   Welcome To E-SHOP
@endsection

@section('content')
@include('layouts.inc.slider')

<div class="py-5">
    <div class="container">
        <div class="row">
            @foreach($featured_products as $prod)
            <div class="col-md-3">
                <div class="card">

                    <img src="{{asset('assets/uploads/products/'.$prod->image)}}" alt="">
                    <div class="card-body">
                        <h5>{{$prod->name}}</h5>
                        <span class="float-star">{{$prod->selling_price}}</span>
                        <span class="float-end"><s>{{$prod->original_price}}</s></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
