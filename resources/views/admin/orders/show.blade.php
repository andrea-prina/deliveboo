@extends('layouts.app')

@section('content')
    <h3 class="text-center my-5 fw-bold">Order n.{{ $order->id }}</h3>
    <div class="container text-center">
        
        <div class="d-flex justify-content-center p-2 my-5 ">
            <div class="row justify-content-center w-100">
                <div class="col-12 col-md-10 ">
                    <div>
                        <div>
                            <h1 class="card-title fw-bold fs-4 mb-2 brand-main-color">Customer Details</h1>
                            <h5><strong>Full Name</strong><br>{{ $order->customer_firstName }} {{ $order->customer_lastName }}</h5>
                            <h5><strong>Address</strong><br>{{ $order->customer_address }}</h5>
                            <h5><strong>Email</strong><br>{{ $order->customer_email }}</h5>
                            <h5><strong>Phone Number</strong><br>{{ $order->customer_phoneNumber }}</h5>
                            @if ($order->additional_notes != '')
                                <h5><strong>Additional Notes</strong><br>{{ $order->additional_notes }}</h5>
                            @else

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <h1 class="card-title fw-bold fs-4 brand-main-color">Dishes details</h1>
        @forelse ($order->food_items as $food)
            <div class="d-flex justify-content-center p-2 mb-2 ">
                <div class="row justify-content-center w-100">
                    <div class="col-12 col-md-10 ">
                        <div class="card border-violet">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-4">{{ $food->name }}</h5>
                                <p class="card-text">{{ $food->description }}</p>
                                <p class="card-text">Price: € <span class="fw-bold">{{ $food->price }}</span></p>
                                <p class="card-text">Quantity: <span class="fw-bold">{{ $food->pivot->food_quantity }}</span></p>
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
