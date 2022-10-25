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

    @if (session()->has('notification'))
    <div class="alert alert-success">
        {!! session('notification') !!}
    </div>
    @endif

    <div class="table-responsive rounded">
        
        <h3 class="my-4 text-center">Your Menu</h3>
        <table class="table table-head table-head-clmn">

            @if ($foodItems->isNotEmpty())
            <thead>
                <tr class="bg-brand text-center tr-flex-column">
                    <th scope="col">Item Name</th>
                    <th scope="col" colspan="2">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            @else
        
            @endif

            <tbody>
                @forelse ($foodItems as $food)
                <tr class="bg-white text-center align-middle tr-flex-column">
                    <td class="fw-bold">{{$food->name}}</td>
                    <td class="responsive-description width-custom" colspan="2">{{$food->description}}</td>
                    <td class="fw-bold">€{{$food->price}}</td>
                    <td><i class="{{ $food->availability ? 'fa-solid fa-check' : 'fa-solid fa-xmark' }}"></i></td>

                    <td class="buttons-flex">
                        <a href="{{route('admin.foodItems.edit', $food->id)}}">
                            <button type="button" class="btn btn-sm btn-light-main">Edit</button>
                        </a>

                        <form action="{{route('admin.foodItems.destroy', $food->id)}}" method="POST"
                            class="crud-delete-form my-1" food-item-name="{{ $food->name }}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-accent" value="Delete">
                        </form>

                        <a href="{{route('admin.foodItems.show', $food->id)}}">
                            <button type="button" class="btn btn-sm btn-light">Show Food</button>
                        </a>

                    </td>
                   
                </tr>

                @empty
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="alert alert-warning">
                                <h3 class="text-center">No Food Items Found</h3>
                                <div>
                                    <img class="w-100" src="https://pbs.twimg.com/media/EXTDb5TWAAA-7jX.jpg" alt="">
                                </div>
                                <div class="text-center mt-4">
                                    Click <a class="text-primary text-decoration-none"
                                        href="{{route('admin.foodItems.create')}}">HERE</a> to add a new food item
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>

                @endforelse
                
            </tbody>

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