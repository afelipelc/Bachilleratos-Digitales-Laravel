@extends('layouts.master')

@section('content')

    <h1>School</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nombre</th><th>Clave</th><th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $school->id }}</td> <td> {{ $school->nombre }} </td><td> {{ $school->clave }} </td><td> {{ $school->direccion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection