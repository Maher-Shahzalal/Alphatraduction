@extends('layouts.app')

@section('title')
 {{ __('home.Profile') }}
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <img src="/uploads/avatars/{{$user->avatar}}"
        style="width:150px; heigth:150px; float:left; border-radius:50%; margin-right:25px;">
         <h2>{{ __('home.Profile of') }} {{$user->name}} </h2>
         <form enctype="multipart/form-data" action="{{ route('profile') }}" method="POST" dir="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
         <lable><h1>{{ __('home.Update Profile Image') }}</h1></lable>
         <input type="file" name="avatar">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type="submit" value="{{ __('home.Upload') }}" class="pull-right btn btn-sm btn-primary">
         </form>
        </div>
    </div>
</div>
@endsection
