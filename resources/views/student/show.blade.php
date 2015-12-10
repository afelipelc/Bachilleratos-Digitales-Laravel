@extends('layouts.master')

@section('content')

    <h1>Student</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nia</th><th>Nombre</th><th>Apellidos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $student->id }}</td> <td> {{ $student->nia }} </td><td> {{ $student->nombre }} </td><td> {{ $student->apellidos }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection