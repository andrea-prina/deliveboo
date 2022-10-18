@extends('layouts.app')
@section('title', 'post')


@section('content')


<div class="container d-flex p-5 bg-white rounded border-violet my-5">
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

                <form action="{{ route('admin.foodItems.store', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    @include('admin.foodItems.includes.form', ['request_image' => '1'])

                </form>
            </div>
        </div>
    </div>
    @endsection
