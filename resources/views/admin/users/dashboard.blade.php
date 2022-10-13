@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{$user->image_path}}" alt="You restourant image" class="w-100">
        </div>
        <div class="col-6">
            <div class="mb-3">
                <span>Full Name</span>
                <span class="form-control">{{$user->name}} {{ $user->surname }}</span>
            </div>
            <div class="mb-3">
                <span>Restaurant Name</span>
                <span class="form-control">{{$user->restaurant_name}}</span>
            </div>
            <div class="mb-3">
                <span>VAT Number</span>
                <span class="form-control">{{$user->vat_number}}</span>
            </div>
            <div class="mb-3">
                <span>Registration Email</span>
                <span class="form-control">{{$user->email}}</span>
            </div>
            <div class="mb-3">
                <span>Address</span>
                <span class="form-control">{{$user->address}}</span>
            </div>
            <div class="mb-3">
                <span>Delivery Fee</span>
                <span class="form-control">
                    {{ $user->free_delivery ? 'FREE' : '€ ' . $user->delivery_fee }}
                </span>
                <div class="form-check form-switch">
                    <input type="checkbox" data-id="{{$user->id}}" class="form-check-input" data-onstyle='success' data-offstyle='danger' data-toggle="toggle" data-on='Active' data-off='Inactive' role="switch"
                    {{$user->free_delivery ? 'checked' : ''}}>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

        $(function() {
            $('.form-check-input').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeFreeDeliveryStatus',
                    data: {
                        'status': status,
                        'id': id
                    },
                    success: function(data) {
                        console.log(data.success)
                    }
                });
            })
        })

  
</script>

@endsection
