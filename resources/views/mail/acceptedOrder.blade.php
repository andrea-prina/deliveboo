@component('mail::message')
# Your order has been accepted

Thanks for your order. We will contact you soon.


<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    @foreach($foodItems as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
        </tr>
    @endforeach

    <tr>
        <td colspan="2">Total</td>
        <td>{{ $currentOrder->order_totalPrice}}</td>
    </tr>

</table>

@component('mail::button', ['url' => 'http://127.0.0.1:8000'])
go back to Deliveboo
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
