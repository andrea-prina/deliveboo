@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{$user->image_path}}" alt="You restourant image" class="w-100">
        </div>
        <div class="col-6">
            <div class="mb-3">
                <span>Full Name</span>
                <span class="form-control">{{$user->name}} {{ $user->surname }}</span>
            </div>
            <div class="mb-3">
                <span>Restaurant Name</span>
                <span class="form-control">{{$user->restaurant_name}}</span>
            </div>
            <div class="mb-3">
                <span>VAT Number</span>
                <span class="form-control">{{$user->vat_number}}</span>
            </div>
            <div class="mb-3">
                <span>Registration Email</span>
                <span class="form-control">{{$user->email}}</span>
            </div>
            <div class="mb-3">
                <span>Address</span>
                <span class="form-control">{{$user->address}}</span>
            </div>
            <div class="mb-3">
                <span>Delivery Fee</span>
                <span class="form-control">
                    {{ $user->free_delivery ? 'FREE' : '€ ' . $user->delivery_fee }}
                </span>
            </div>
        </div>
    </div>
</div>


@endsection
