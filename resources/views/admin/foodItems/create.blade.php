@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-5 text-center">
    <div class="row justify-content-center w-100">
        <div class="col-6">

          @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
              @endif

            <form action="{{ route('admin.foodItems.store', $food->id) }}" method="POST">
                @csrf
                @method('POST')
                <!-- Name input -->
                <div class="form-outline mb-4">
                  <input type="text" required max='255'id="form4Example1" class="form-control" name="name"/>
                  <label class="form-label" for="form4Example1">Name *</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" required id="form4Example2" class="form-control" name="image_path" />
                  <label class="form-label" for="form4Example2">Image *</label>
                </div>

                 <!-- Email input -->
                 <div class="form-outline mb-4">
                    <input type="text" required id="form4Example2" class="form-control" name="description" />
                    <label class="form-label" for="form4Example2">Description *</label>
                  </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <input type="number" step="0.01" min="0.01" required id="form4Example2" class="form-control" name="price" />
                    <label class="form-label" for="form4Example2">Price *</label>
                  </div>


                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
              </form>
        </div>
    </div>
</div>
@endsection
