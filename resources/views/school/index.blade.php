@extends('layouts.master')

@section('content')

    <h1>Bachilleratos <a href="{{ url('/school/create') }}" class="btn btn-primary pull-right btn-sm">Añadir nuevo</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Nombre</th><th>Clave</th><th>Dirección</th><th>Director</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($schools as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/school', $item->id) }}">{{ $item->nombre }}</a></td>
                    <td>{{ $item->clave }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td><a href="{{ url('/school/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Modificar</button></a> / {!! Form::open(['method'=>'delete','action'=>['SchoolController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Borrar</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection