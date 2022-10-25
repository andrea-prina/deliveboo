@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-head ">

   
        <thead>
            <tr class="bg-brand-secondary text-center">
                <th scope="col">Food Name</th>
                <th scope="col" colspan="2">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                
            </tr>
        </thead>
       
    
        <tbody>
            @forelse ($order->food_items as $food)
            <tr class="bg-white text-center">
                <td>{{$food->name}}</td>
                <td colspan="2">{{$food->description}}</td>
                <td>{{$food->price}}</td>
                <td>{{$order->additional_notes}}</td>
               
            </tr>
    
            @empty
            <tr>
                <td colspan="7" class="text-center"Il tuo ordine è vuoto</td>
    
            @endforelse
            
        </tbody>
    
    </table>
</div>

<div class="container">
 @forelse ($order->food_items as $food)
    {{$food->name }} - {{$food->price}} 
@empty
    No tags
@endforelse
</div>
@endsection

