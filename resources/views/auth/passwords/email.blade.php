@extends('front_user.Master_auth')

@section('title')
    {{ __('auth.Reset Password') }}
@endsection

@section('content')
    <h2>{{ __('auth.Reset Password') }}</h2>
        <div class="form-row">
            <label for="email">{{ __('auth.E-Mail Address') }}</label>
                <input type="text" name="email" id="email" class="input-text @error('email') is-invalid @enderror" placeholder="{{ __('auth.E-Mail Address') }}" value="{{ old('email') }}" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                    <i class="fas fa-envelope"></i>
                @error('email')
                <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-row-last">
                <input type="submit" name="register" class="register" value="{{ __('auth.Reset Password') }}">
            </div>
    <br><br>
@endsection
