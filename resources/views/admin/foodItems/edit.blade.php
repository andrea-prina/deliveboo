@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-3 bg-white rounded border-violet my-5">
    <div class="row justify-content-center w-100">
        <div class="col-12 col-lg-6">
            <h3 class="my-4">Edit Your Item</h3>
            <form action="{{ route('admin.foodItems.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                @include('admin.foodItems.includes.form', ['request_image' => '0'])

        </div>
    </div>
</div>
@endsection