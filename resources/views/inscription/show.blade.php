@extends('layouts.master')

@section('content')

    <h1>Inscription</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Student Id</th><th>School Id</th><th>Semester Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inscription->id }}</td> <td> {{ $inscription->student_id }} </td><td> {{ $inscription->school_id }} </td><td> {{ $inscription->semester_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection