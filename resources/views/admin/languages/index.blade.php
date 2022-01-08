@extends('_layouts.Master')

@section('title')
    Show all orders
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header"> All orders</div>
        <table class="card-body">
            <table class="table">
                <thead>
                <th>id</th>
                <th>abbr</th>
                <th>locale</th>
                <th>name</th>
                <th>direction</th>
                <th>active</th>
                </thead>
                @isset($languages)
                @foreach($languages as $language)
                    <tr>
                        <td>{{ $language->id}}</td><td>{{ $language->abbr }}</td><td>{{ $language->locale }}</td><td>{{ $language->name }}</td><td>{{ $language->direction }}</td><td>{{$language->active}}</td>
                    </tr>
                    @endforeach
                @endisset
            </table>
    </div>
    </div>
@endsection('content')
