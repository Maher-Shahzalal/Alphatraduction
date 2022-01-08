@extends('_layouts.Master')

@section('title')
    {{ __('admin.Show all orders') }}
@endsection

@section('content')
    <div class="row m-t-30">
        <div class="col-md-12">
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
               <thead>
                     <th>{{ __('admin.id') }}</th>
                     <th>{{ __('admin.First name') }}</th>
                     <th>{{ __('admin.Last name') }}</th>
                     <th>{{ __('admin.Email') }}</th>
                     <th>{{ __('admin.Whatsapp number') }}</th>
                     <th>{{ __('admin.Message') }}</th>
                     <th>{{ __('admin.Actions') }}</th>

               </thead>
               @foreach($Order as $order)
                  <tr>
                      <td>{{ $order->id}}</td><td>{{ $order->First_name }}</td><td>{{ $order->Last_name }}</td><td>{{ $order->Email }}</td><td>{{ $order->whatsapp_number }}</td><td>{{$order->Message}}</td>
                      <td>
                          <form action="show_orders/{{$order->id}}/delete">
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
@endsection('content')
