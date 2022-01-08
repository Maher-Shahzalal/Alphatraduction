@extends('front_user.Master')

@section('title')
    {{ __('order.SERVICES REQUEST') }}
@endsection

@section('nav')
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a class="dropdown" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
@endsection('nav')
<div class="upper-bar">
@section('content')

<br><br>

<h2 class="">{{ __('order.SERVICES REQUEST') }}</h2>

<form method="POST" >
      {{csrf_field()}}
        <div class="input-group input-group-sm mb-3">
           <div class="input-group-prepend">
              <span class="input-group-text my-2 my-lg-2">{{ __('order.First Name') }}</span>
          </div>
      <input type="text" class="@error('First_name') is-invalid @enderror form-control my-2 my-lg-2" name="First_name">
                 @error('First_name')
                   <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                 @enderror
           <div class="input-group-prepend">
              <span class="input-group-text my-2 my-lg-2" id="basic-addon1"  >{{ __('order.Last Name') }}</span>
          </div>
      <input type="text" class="@error('Last_name') is-invalid @enderror form-control my-2 my-lg-2" name="Last_name">
                  @error('Last_name')
            <div class="alert alert-danger">
               {{ $message }}
          </div>
               @enderror
          </div>
          <div class="input-group input-group-sm mb-3">
             <div class="input-group-prepend">
              <span class="input-group-text my-2 my-lg-2" id="basic-addon1">{{ __('order.Email') }}</span>
             </div>
      <input type="email" class="@error('Email') is-invalid @enderror form-control my-2 my-lg-2" name="Email">
                 @error('Email')
             <div class="alert alert-danger">
               {{ $message }}
             </div>
               @enderror
             <div class="input-group-prepend">
              <span class="input-group-text my-2 my-lg-2" id="basic-addon1">{{ __('order.Whatsapp number') }}</span>
             </div>
      <input type="number" class="@error('whatsapp_number') is-invalid @enderror form-control my-2 my-lg-2" name="whatsapp_number" placeholder="{{ __('order.Enter 00 then country code') }}">
                  @error('whatsapp_number')
      <div class="alert alert-danger">
        The number of digits must be between 13 and 14 digits, with the addition of the country code after typing 00
       </div>
            @enderror
        </div>
       <div class="input-group input-group-sm mb-3">
         <div class="input-group">
              <span class="input-group-text my-2 my-lg-2" id="basic-addon1" >{{ __('order.Message') }}</span>
          </div>
      <textarea type="text" class="@error('Message') is-invalid @enderror form-control my-2 my-lg-2" name="Message" rows="2"></textarea>
              @error('Message')
                  <div class="alert alert-danger">
               {{ $message }}
        </div>
             @enderror
      </div>
       <div class="form-group">
                    <button type="submit" class="btn btn-success" name="ok">
                        {{ __('order.Enter') }}
                    </button>
       </div>
    <br><br>
   </form>


@endsection
