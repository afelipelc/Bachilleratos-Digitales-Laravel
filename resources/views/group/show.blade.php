@extends('layouts.master')

@section('content')

    <h1>Group</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>User Id</th><th>Semester Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $group->id }}</td> <td> {{ $group->nombre }} </td><td> {{ $group->user_id }} </td><td> {{ $group->semester_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection