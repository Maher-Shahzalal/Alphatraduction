@extends('_layouts.Master')

@section('title')
    {{ __('admin.Publish Media') }}
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>{{ __('admin.Publish Media') }}</strong>
            </div>
            <div class="card-body card-block">
               <form action="/admin_home/show_media" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}

                   <div class="col-12 col-md-9">
                       <label for="media_image">{{ __('admin.Publish Image') }}</label>
                       <input type="file" class="@error('image')is-invalid @enderror form-control" name="image">
                       @error('image')
                       <div class="alert alert-danger">
                           {{ $message }}
                       </div>
                       @enderror
                   </div>

                   <div class="card-footer">
                       <button type="submit" class="btn btn-primary btn-sm">
                           <i class="fa fa-dot-circle-o">{{ __('admin.Upload') }}</i>
                       </button>
                   </div>
               </form>
            </div>
        </div>
    </div>
@endsection('content')

