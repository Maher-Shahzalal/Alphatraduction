@extends('_home_layouts.Master')

@section('title')
    {{ __('home.Dashboard') }}
@endsection

@section('content')

    <div class="row m-t-30">
        <div class="col-md-8">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                    <th>{{ __('home.Image') }}</th>
                    </thead>
                    <tr>
                        @foreach($Media as $mediaItem)
                            <td><img class="imagee" src="{{ asset('storage/'.$mediaItem->image) }}"></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

