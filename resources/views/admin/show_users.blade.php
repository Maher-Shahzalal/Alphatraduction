@extends('_layouts.Master')

@section('title')
    {{ __('admin.Show all users') }}
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                   <thead>
                     <th>{{ __('admin.id') }}</th>
                     <th>{{ __('admin.Name') }}</th>
                     <th>{{ __('admin.Email') }}</th>
                     <th>{{ __('admin.Premission') }}</th>
                     <th>{{ __('admin.Actions') }}</th>
                    </thead>
                @foreach($User as $user)
                    <tr>
                      <td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->user_type }}</td>
                        <td>
                            <form action="show_users/{{$user->id}}/delete">
                                <button class="btn btn-danger btn-sm">
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

