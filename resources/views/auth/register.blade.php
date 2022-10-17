@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-brand-secondary">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" name="registration-form" onsubmit="return TagValidation();">
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus maxlength="255">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="surname" type="text"
                                        class="form-control @error('surname') is-invalid @enderror" name="surname"
                                        value="{{ old('surname') }}" required autocomplete="surname" autofocus
                                        maxlength="255">

                                    @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="restaurant_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __("Restaurant's name") }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="restaurant_name" type="text"
                                        class="form-control @error('restaurant_name') is-invalid @enderror"
                                        name="restaurant_name" value="{{ old('restaurant_name') }}" required
                                        autocomplete="restaurant_name" autofocus maxlength="255">

                                    @error('restaurant_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vat_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Vat number') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="vat_number" type="text"
                                        class="form-control @error('vat_number') is-invalid @enderror" name="vat_number"
                                        value="{{ old('vat_number') }}" required autocomplete="vat_number" autofocus
                                        minlength="11" maxlength="11">

                                    @error('vat_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" maxlength="255">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="off">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Address') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" autocomplete="address" autofocus maxlength="255"
                                        required>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="delivery_fee"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Delivery fee') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    <input id="delivery_fee" type="number"
                                        class="form-control @error('delivery_fee') is-invalid @enderror"
                                        name="delivery_fee" value="{{ old('delivery_fee') }}" autofocus min="0"
                                        max="99.99" autocomplete="delivery_fee" required>

                                    @error('delivery_fee')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image_path"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Image upload') }}</label>

                                <div class="col-md-6 my-2">
                                    <input id="image_path" type="file"
                                        class="form-control @error('image_path') is-invalid @enderror" name="image_path"
                                        value="{{ old('image_path') }}" autofocus max="255" autocomplete="image_path">

                                    @error('image_path')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="types"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Select at least one category') }}<span class="star">*</span></label>

                                <div class="col-md-6 my-2">
                                    @foreach ($types as $type)
                                    <div class="form-check form-check-inline" id="types-form">
                                        <input type="checkbox" name="types[]" class="form-check-input" id="{{ $type->type_name }}" value="{{$type->id}}" {{ $user->types->contains($type) ? 'checked' : '' }}>
                                        <label for="types">{{ $type->type_name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row mb-0 my-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-accent" id="submit-button">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')

<script>

    function TagValidation() {
        console.log('button')
        var types = document.getElementsByName('types[]');
        var checked = false;
        for (var i = 0; i < types.length; i++) {
            if (types[i].checked) {
                checked = true;
            }
        }
        if (!checked) {
            alert('Please select at least one category');
            return false;
        }
    }

</script>

@endsection
