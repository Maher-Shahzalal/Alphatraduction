@extends('_layouts.Master')

@section('title')
    Show all Main Categories
@endsection

@section('content')
    <div class="card card-default">
        <div class="card-header"> All Main Categories </div>
        <table class="card-body">
            <table class="table">
                <thead>
                <th>Main Categories</th>
                </thead>

                    <tr>
                        <td>{{App\Main_category::count()}}</td>
                    </tr>
            </table>
    </div>
    </div>
@endsection('content')
