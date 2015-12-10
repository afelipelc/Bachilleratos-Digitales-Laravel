@extends('layouts.master')

@section('content')

    <h1>Partial</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Schoolyear Id</th><th>Semester Id</th><th>Parcial</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $partial->id }}</td> <td> {{ $partial->schoolyear_id }} </td><td> {{ $partial->semester_id }} </td><td> {{ $partial->parcial }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection