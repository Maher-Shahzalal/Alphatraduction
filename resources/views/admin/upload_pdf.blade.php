@extends('_layouts.Master')

@section('title')
    {{ __('admin.Upload PDF file') }}
@endsection

@section('content')
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <strong>{{ __('admin.Upload PDF file') }}</strong>
            </div>
            <div class="card-body card-block">
               <form action="/admin_home" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    {{csrf_field()}}
                  <div class="col-12 col-md-9">
                     <input type="file" class=" form-control" class="@error('file')
                                    is-invalid @enderror form-control" name="file">
                          @error('file')
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

