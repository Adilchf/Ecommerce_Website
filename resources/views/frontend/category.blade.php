@extends('layouts.front')

@section('title')
   Welcome To E-SHOP
@endsection

@section('content')
@include('layouts.inc.slider')

<div class="py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                @foreach($category as $cate)
                  <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                        <div class="card">

                        <img src="{{asset('assets/uploads/category/'.$cate->image)}}" alt="">
                        <div class="card-body">
                            <h5>{{$cate->name}}</h5>
                            <p>
                                {{$cate->small_description}}
                            </p>
                        </div>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
