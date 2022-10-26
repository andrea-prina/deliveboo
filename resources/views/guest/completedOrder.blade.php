@extends('layouts.app')

@section('title', 'Thanks for your order')

@section('content')

    <section class="h-100 h-custom brand-title">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3 border-orange">
                        <div class="card-body p-5">

                            <p class="lead fw-bold fs-4 mb-5 brand-main-color">Order Received! Thank you
                                {{ $order->customer_firstName }}</p>

                            <div class="row">
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Date</p>
                                    <p>{{ $order->created_at }}</p>
                                </div>
                                <div class="col mb-3">
                                    <p class="small text-muted mb-1">Order No.</p>
                                    <p>{{ substr(md5(time()), 0, 16) }}</p>
                                </div>
                            </div>

                            <div class="mx-n5 px-3 py-4 bg-brand-accent-secondary">
                                <div class="row">
                                    <div class="col-7 col-md-8 col-lg-9">
                                        <h5 class="fw-bold lead">Dish</h5>
                                        @foreach ($order->food_items as $food)
                                            <p>{{ $food->name }} <span
                                                    class="text-secondary">x{{ $food->pivot->food_quantity }}</span></p>
                                        @endforeach
                                    </div>
                                    <div class="col-5 col-md-4 col-lg-3">
                                        <h5 class="fw-bold lead">Price</h5>

                                        @foreach ($order->food_items as $food)
                                            <p>{{ $food->price * $food->pivot->food_quantity }}€</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-lg-9">
                                        <p class="mb-0">Delivery Fee</p>
                                    </div>
                                    <div class="col-md-4 col-lg-3">
                                        <p class="mb-0">{{ $orderUser->delivery_fee }} €</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-4 lead fw-bold mb-0 brand-main-color">
                                <div class="col-5 col-md-3">Total:</div>
                                <div class="col-6 offset-1 col-md-4 offset-md-5 col-lg-3 offset-lg-6">
                                    <p>{{ $order->order_price }} €</p>
                                </div>
                            </div>

                            {{-- <p class="lead fw-bold mb-4 pb-2 brand-main-color">Tracking Order</p> --}}

                            {{-- <div class="row">
                <div class="col-lg-12">
  
                  <div class="horizontal-timeline">
  
                    <ul class="list-inline items d-flex justify-content-between">
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded text-white bg-brand">Ordered</p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded">Shipped</p
                          class="py-1 px-2 rounded">
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded">On the way
                        </p>
                      </li>
                      <li class="list-inline-item items-list">
                        <p class="py-1 px-2 rounded">Delivered
                        </p>
                      </li>
                    </ul>
  
                  </div>
   --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

@endsection
