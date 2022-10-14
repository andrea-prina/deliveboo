@extends("layouts.app")

@section('title', 'Show')

@section('content')

<div class="container">


<div class="d-flex p-5">
   <div class="row justify-content-center w-100">
    <div class="col-4">
        <div class="card">
            <img class="card-img-top p-2" src="{{asset('/storage/' . $food->image_path)}}" alt="{{$food->name}}">

            <div class="card-body">
              <h5 class="card-title">{{$food->name}}</h5>
              <p class="card-text">{{$food->description}}</p>
              <p class="card-text"><small class="text-muted">{{$food->price}}</small>$</p>
              <a href="{{route('admin.foodItems.index')}}" class="btn btn-primary w-100">Go back</a>
            </div>
          </div>
    </div>
  </div>
   </div>
</div>

@endsection