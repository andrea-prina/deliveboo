@extends('layouts.app')

@section('content')

<div class="container">

    {{ $orders->links() }}

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
        
        <h3 class="my-4 text-center">Your Orders</h3>
        <table class="table table-head ">

            @if ($orders->isNotEmpty())
            <thead>
                <tr class="bg-brand text-center tr-flex-column">
                    <th scope="col">Order ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order details</th>
                </tr>
            </thead>
            @else
        
            @endif

            <tbody>
                @forelse ($orders as $order)
                <tr class="bg-white text-center align-middle tr-flex-column">
                    <td class="fw-bold">
                        <span class="display-not-available show-from-md-screen">Order ID: </span>
                        {{$order->id}}
                    </td>
                    <td>{{$order->customer_firstName}}</td>
                    <td>{{$order->customer_lastName}}</td>
                    <td>{{$order->customer_email}}</td>
                    <td>{{$order->customer_phoneNumber}}</td>
                    <td>{{$order->customer_address}}</td>
                    <td>{{$order->created_at}}</td>
                    <td class="fw-bold" >€{{$order->order_price}}</td>
                    <td>
                        <a href="{{route('admin.orders.show', $order->id)}}">
                            <button type="button" class="btn btn-sm btn-accent">Details</button>
                        </a>
                    </td>
                    
                </tr>

                @empty
                <h5 class="text-center">No recent orders here</h5>

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




