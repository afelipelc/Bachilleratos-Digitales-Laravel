@extends('layouts.master')

@section('content')

    <h1>Students <a href="{{ url('/student/create') }}" class="btn btn-primary pull-right btn-sm">Add New Student</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nia</th><th>Nombre</th><th>Apellidos</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($students as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/student', $item->id) }}">{{ $item->nia }}</a></td><td>{{ $item->nombre }}</td><td>{{ $item->apellidos }}</td>
                    <td><a href="{{ url('/student/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['StudentController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection