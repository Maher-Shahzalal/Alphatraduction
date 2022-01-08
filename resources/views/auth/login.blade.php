@extends('front_user.Master_auth')

@section('title')
    {{ __('auth.Login') }}
@endsection

@section('content')
    <form class="form-detail" action="{{ route('login') }}" method="post">
        @csrf
    <h2>{{ __('auth.Login') }}</h2>
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
        <div class="form-row">
            <label for="password">{{ __('auth.Password') }}</label>
                  <input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" placeholder="{{ __('auth.Password') }}" required>
					<i class="fas fa-lock"></i>
                    @error('passwor')
                         <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                         </span>
                    @enderror
		</div>
        <div class="form-row-last">
				<input type="submit" name="register" class="register" value="{{ __('auth.Login') }}">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('auth.Forgot Your Password?') }}
                        </a>
                    @endif
        </div>
    </form>
@endsection

