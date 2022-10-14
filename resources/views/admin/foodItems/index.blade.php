@extends('layouts.app')

@section('content')

<div class="container">

    {{ $foodItems->links() }}

    @if (session('delete'))
        <div class="alert alert-danger">{{ session('delete') }}</div>
    @elseif (session('new_entry'))
        <div class="alert alert-success">{{ session('new_entry') }}</div>
    @elseif (session('update'))
        <div class="alert alert-warning">{{ session('update') }}</div>
    @endif

    <div class="table-responsive ">
        <table class="table table-hover bg-brand-secondary">
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
                    <td><a href="#">{{$food->user_id}}</a></th>
                    <td>{{$food->name}}</td>
                    <td colspan="2">{{$food->description}}</td>
                    <td>{{$food->price}}</td>
                    <td>{{$food->availability}}</td>
                    <td>
                        <a href="{{route('admin.foodItems.edit', $food->id)}}">
                            <button type="button" class="btn btn-sm btn-success">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('admin.foodItems.destroy', $food->id)}}" method="POST" class="crud-delete-form" food-item-name="{{ $food->name }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger"value="Delete" >
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

@endsection

@section('footer-scripts')
    <script>
        const deleteFormButton = document.querySelectorAll('.crud-delete-form');
        console.log(deleteFormButton);
        deleteFormButton.forEach(element => {
            element.addEventListener('submit', function(event){
                const foodItemName = this.getAttribute('food-item-name');
                event.preventDefault();
                const result = window.confirm(`Do you REALLY want to delete ${foodItemName} ?`);
                if (result) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
