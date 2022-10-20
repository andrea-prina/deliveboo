@extends("layouts.app")

@section('title', 'Show')

@section('content')

<div class="container">


<div class="d-flex p-5">
  <div class="row justify-content-center w-100">
    <div class="col-12">
      <div class="card">
        @if (filter_var($food->image_path , FILTER_VALIDATE_URL))
        <img src="{{ $food->image_path }}" class="card-img-top p-2" alt="image of food: {{ $food->name}}">
    @else
        <img src="{{ asset('/storage' . '/' . $food->image_path) }}" class="card-img-top p-2" alt="image of food: {{ $food->name}}">
    @endif                                   {{-- '/storage/' . --}}
        {{-- <img class="card-img-top p-2" src="{{asset($food->image_path)}}" alt="{{$food->name}}"> --}}

        <div class="card-body">
          <h5 class="card-title fw-bold fs-4">{{$food->name}}</h5>
          <p class="card-text fs-5">{{$food->description}}</p>
          <span class="fs-5 fw-bold">
            Availability: 
            <i class="{{ $food->availability ? 'fa-solid fa-check text-primary' : 'fa-solid fa-xmark text-danger' }}"></i>
            </span>
          <p class="card-text"><small class="text-muted fs-5">{{$food->price}}</small>€</p>
          <a href="{{route('admin.foodItems.index')}}" class="btn btn-primary w-100">Go back</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
