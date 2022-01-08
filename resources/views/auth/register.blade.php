@extends('front_user.Master_auth')

@section('title')
    {{ __('auth.Register') }}
@endsection

@section('content')
    <form class="form-detail" action="{{ route('register') }}" method="post">
        @csrf
    <h2>{{ __('auth.Register Account Form') }}</h2>
		<div class="form-row">
			<label for="full-name">{{ __('auth.Name') }}</label>
				<input type="text" name="name" id="full-name" class="input-text @error('name') is-invalid @enderror" placeholder="{{ __('auth.Your Name') }}" value="{{ old('name') }}" required>
					<i class="fas fa-user"></i>
                    @error('name')
                          <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                           </span>
                    @enderror
		</div>
		<div class="form-row">
			<label for="your-email">{{ __('auth.E-Mail Address') }}</label>
				<input type="text" name="email" id="your-email" class="input-text @error('email') is-invalid @enderror" placeholder="{{ __('auth.Your Email') }}" value="{{ old('email') }}" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
                    @error('email')
                             <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                          </span>
                     @enderror
		</div>
		<div class="form-row">
			<label for="password">{{ __('auth.Password') }}</label>
				<input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" placeholder="{{ __('auth.Your Password') }}" required>
					<i class="fas fa-lock"></i>
                    @error('passwor')
                             <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                         </span>
                   @enderror
		</div>
        <div class="form-row">
			<label for="password-confirm">{{ __('auth.Confirm Password') }}</label>
				<input type="password" name="password_confirmation" id="password-confirm" class="input-text @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('auth.Your Password') }}" required>
					<i class="fas fa-lock"></i>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-row-last">
            <input type="submit" name="register" class="register" value="{{ __('auth.Register') }}">
        </div>
    </form>
@endsection

