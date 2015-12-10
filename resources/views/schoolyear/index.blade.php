@extends('layouts.master')

@section('content')

    <h1>Ciclos escolares <a href="{{ url('/schoolyear/create') }}" class="btn btn-primary pull-right btn-sm">Agregar</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Ciclo escolar</th><th>Acciones</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($schoolyears as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/schoolyear', $item->id) }}">{{ $item->titulo }}</a></td>
                    <td><a href="{{ url('/schoolyear/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Actualizar</button></a> / {!! Form::open(['method'=>'delete','action'=>['SchoolyearController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Borrar</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection