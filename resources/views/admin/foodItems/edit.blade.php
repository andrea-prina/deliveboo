@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-5 text-center">
    <div class="row justify-content-center w-100">
        <div class="col-6">
            <form action="{{ route('admin.foodItems.update', $food->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form4Example1" class="form-control" value="{{old('name', $food->name)}}" name="name" required/>
                  <label class="form-label" for="form4Example1">Name</label>
                </div>
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form4Example2" class="form-control" value="{{old('image_path', $food->image_path)}}" name="image_path" />
                  <label class="form-label" for="form4Example2">Image</label>
                </div>

                 <!-- Email input -->
                 <div class="form-outline mb-4">
                    <input type="text" id="form4Example2" class="form-control" value="{{old('description', $food->description)}}" name="description" />
                    <label class="form-label" for="form4Example2">Description</label>
                  </div>
              
                <!-- Message input -->
                <div class="form-outline mb-4">
                    <input type="price" id="form4Example2" class="form-control" value="{{old('price', $food->price)}}" name="price" required/>
                    <label class="form-label" for="form4Example2">Price</label>
                  </div>
              
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
              </form>
        </div>
    </div>
</div>
@endsection