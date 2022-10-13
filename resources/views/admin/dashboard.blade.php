@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 card">
            <img src="{{$user->image_path}}" alt="You restourant image" class="w-100">
            <div class="card-body">
                <h1 class="card-title">{{$user->name}}</h1>
                <p class="card-text">Your registered email is : {{$user->email}}</p>
                <p class="card-text">{{$user->password}} 👀</p>
                <p class="card-text"> Delivery fee : {{$user->delivery_fee}}</p>
                <p class="card-text"> VAT: {{$user->vat_number}}</p>
                <a href="{{route('')}}" class="btn btn-primary">Edit</a>
            </div>

        </div>
    </div>
</div>


@endsection
