@extends('layouts.master')

@section('content')

    <h1>Inscriptions <a href="{{ url('/inscription/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inscription</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Student Id</th><th>School Id</th><th>Semester Id</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inscriptions as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/inscription', $item->id) }}">{{ $item->student_id }}</a></td><td>{{ $item->school_id }}</td><td>{{ $item->semester_id }}</td>
                    <td><a href="{{ url('/inscription/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['InscriptionController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection