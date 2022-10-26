@extends('layouts.app')

@section('content')
    <h3 class="text-center my-5">Your Dish</h3>
    <div class="container text-center">
        
        @forelse ($order->food_items as $food)
            <div class="d-flex justify-content-center p-2 my-5">
                <div class="row justify-content-center w-100">
                    <div class="col-12 col-md-10">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-4">{{ $food->name }}</h5>
                                <p class="card-text fs-5">{{ $food->description }}</p>
                                <p class="card-text">Price: € <span class="fs-5 fw-bold">{{ $food->price }}</span></p>
                                <p class="card-text">Quantity: <span class="fs-5 fw-bold">{{ $food->pivot->food_quantity }}</span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center">Il tuo ordine è vuoto</div>

        @endforelse

    </div>
@endsection
