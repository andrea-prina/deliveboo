@extends('layouts.app')

@section('content')

<div class="container bg-white border-violet p-5">
    <h3 class="text-center my-3">Account Info</h3>
    <div class="row">
        <div class="col-12 col-lg-7 d-flex mb-4">
            @if (filter_var($user->image_path , FILTER_VALIDATE_URL))
                 <img src="{{ $user->image_path }}" class="w-100 rounded" alt="image of food: {{ $user->name}}">
                 @else
                <img src="{{ asset('/storage' . '/' . $user->image_path) }}" class="w-100 rounded" alt="image of food: {{ $user->name}}">
                @endif
            {{-- <img src="{{asset('/storage/' . $user->image_path)}}" alt="You restourant image" class="w-100 rounded"> --}}
        </div>
        <div class="col-12 col-lg-5">
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
            <div class="my-3">
                <span>Delivery Fee</span>
                <span class="form-control">
                    {{ $user->free_delivery ? 'FREE' : '€ ' . $user->delivery_fee }}
                </span>
                <form action="{{ route('admin.toggleFree', ["id" => Auth::id()]) }}" method="POST" class="crud-delete-form">
                    @csrf
                    @method('PUT')
                    <label class="form-check-label mt-3" for="inlineCheckbox1">Free Delivery</label>
                    <input type='hidden' value='0' name='free_delivery'>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="free_delivery" value="1" name="free_delivery" onchange="this.form.submit()" {{$user->free_delivery == "1" ? 'checked' : ''}}>
                    </div>
                </form>
            </div>

            <div class="">Categories:</div>
            <ul class="p-0 my-2">
            @forelse ($user->types as $type)
            <li class="list-styling"> {{ $type->type_name }}</li>
            @empty
            <div></div>
            @endforelse
            </ul>
        </div>
    </div>
</div>

@endsection
