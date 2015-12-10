@extends('layouts.master')

@section('content')

    <h1>Grupos: {{ $school->nombre }} - {{ $schoolyear->titulo }} <a href="{{ url('/group/create') }}" class="btn btn-primary pull-right btn-sm">Add New Group</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nombre</th><th>Tutor</th><th>Semestre</th><th>Acciones</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($school->groups()->fromsy($schoolyear->id)->get() as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/group', $item->id) }}">{{ $item->nombre }}</a></td><td>{{ $item->user->name }}</td><td>{{ $item->semester->nombre }}</td>
                    <td><a href="{{ url('/group/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['GroupController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection