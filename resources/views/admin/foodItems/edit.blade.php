@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-5 bg-white rounded border-violet">
    <div class="row justify-content-center w-100">
        <div class="col-6">
            <form action="{{ route('admin.foodItems.update', $food->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                @include('admin.foodItems.includes.form')

        </div>
    </div>
</div>
@endsection