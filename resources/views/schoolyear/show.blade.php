@extends('layouts.master')

@section('content')

    <h1>Schoolyear</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Ciclo escolar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $schoolyear->id }}</td> <td> {{ $schoolyear->titulo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection