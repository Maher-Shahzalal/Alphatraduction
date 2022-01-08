@extends('_layouts.Master')

@section('title')
    {{ __('admin.Show Media') }}
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-8">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
             <thead>

                <th>{{ __('admin.Image') }}</th>
                <th>{{ __('admin.Actions') }}</th>
             </thead>
             <tr>
                 @foreach($Media as $mediaItem)
                     <td><img class="imagee" src="{{ asset('storage/'.$mediaItem->image) }}"></td>
             <td>
                  <form action="show_media/{{$mediaItem->id}}/delete">
                     <button class="btn btn-danger btn-s">
                         {{ __('admin.Delete') }}
                    </button>
                  </form>
            </td>
         </tr>
            @endforeach
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection('content')

