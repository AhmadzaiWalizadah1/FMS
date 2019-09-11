@extends('admin.layout')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
                Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </thead>

                <tbody>
                    @if($users->count() > 0)
                        @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                        @endforeach
                    @else
                        <tr>
                                <th colspan="5" class="text-center">There are no users.</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@stop