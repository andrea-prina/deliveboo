@extends('layouts.app')
@section('title', 'Index')

@section('content')

<div class="container">

    {{ $foodItems->links() }}

    <div class="table-responsive">
        <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">User ID</th>
                <th scope="col">Name</th>
                <th scope="col" colspan="2">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Availability</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Show</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($foodItems as $food)
                <tr>
                    <td><a href="#">{{$food->id}}</a></th>
                    <td>{{$food->name}}</td>
                    <td colspan="2">{{$food->description}}</td>
                    <td>{{$food->price}}</td>
                    <td>{{$food->availability}}</td>
                    <td>
                        <a href="#">
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('admin.foodItems.show', $food->id)}}">
                            <button type="button" class="btn btn-sm btn-primary">Show Food</button>
                        </a>
                    </td>
                </tr>
            @endforeach
          </table>
    </div>
    
</div>

