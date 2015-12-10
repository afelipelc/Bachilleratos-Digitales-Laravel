@extends('layouts.master')

@section('content')

    <h1>Materias <a href="{{ url('/subject/create') }}" class="btn btn-primary pull-right btn-sm">Nueva Materia</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Materia</th><th>Semestre</th><th>Acciones</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($subjects as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/subject', $item->id) }}">{{ $item->nombre }}</a></td><td>{{ $item->semester->nombre }}</td>
                    <td><a href="{{ url('/subject/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Modificar</button></a> / {!! Form::open(['method'=>'delete','action'=>['SubjectController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Eliminar</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection