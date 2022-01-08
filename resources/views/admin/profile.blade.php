@extends('_layouts.Master')

@section('title')
    {{ __('admin.Profile') }}
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>{{ __('admin.Upload PDF file') }}</strong>
            </div>
            <div class="card-body card-block">
                <img src="/uploads/avatars/{{$user->avatar}}"
                     style="width:150px; heigth:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ __('admin.Profile of') }} {{$user->name}}</h2>
                <form enctype="multipart/form-data" action="{{ route('admin_profile') }}" method="POST" dir="{{ app()->getLocale() != 'ar' ? 'ltr' : 'rtl' }}">
                    <lable><h2>{{ __('admin.Update Profile Image') }}</h2></lable>
                    <input type="file" name="avatar" required>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o">{{ __('admin.Upload') }}</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

