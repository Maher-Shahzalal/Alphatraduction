@extends('front_user.Masterr')

@section('title')
    {{ __('auth.ALPHA Offers') }}
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
    <style>
        iframe{ display: block; background: #000; border: none; height: 100vh; width: 100vw; }
    </style>
    <div data-aos="fade-in">
        @foreach($PDF as $pdfs)
            <iframe src="{{ asset('storage/'.$pdfs->pdf) }}" ></iframe>
        @endforeach
    </div>
@endsection




<!DOCTYPE html>
<html lang="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
<head>
      <title>ALPHA Offers</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
<style>
      body{
	          background: url(../images/n.jpg) no-repeat; background-size: cover;
                -webkit-background-size: cover; -moz-background-size: cover;
                 -o-background-size: cover; -ms-background-size: cover;
                 background-attachment: fixed; background-position: center;
            }
      iframe{ display: block; background: #000; border: none; height: 100vh; width: 100vw; }
</style>
</head>
      <body>
          @foreach($PDF as $pdfs)
             <iframe src="{{ asset('storage/'.$pdfs->pdf) }}" ></iframe>
          @endforeach
      </body>
</html>
