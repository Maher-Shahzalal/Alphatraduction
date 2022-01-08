@extends('front_user.Masterr')

@section('title')
    {{ __('auth.ALPHA TRADUCTION') }}
@endsection

@section('nav')
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a class="dropdown" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach
@endsection

@section('content')
    <div data-aos="fade-in">
        <div class="actions">
            <a href="order" class="{{ __('auth.btn-get-started') }}"></a>
            <br><br>
            <a href="present_pdf" class="{{ __('auth.btn-services') }}"></a>
        </div>
        <br>
        <div class="actions">
            <a href="login" class="{{ __('auth.btn-get-startedd') }}"></a>
            <a href="register" class="{{ __('auth.btn-servicess') }}"></a>
        </div>
    </div>
@endsection


