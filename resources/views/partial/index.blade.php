@extends('layouts.master')

@section('content')

    <h1>Parciales <a href="{{ url('/partial/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Parcial</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Ciclo escolar</th><th>Periodo</th><th>Parcial</th><th>Acciones</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($partials as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/partial', $item->id) }}">{{ $item->schoolyear->titulo }}</a></td><td>{{ $item->periodo }}</td><td>{{ $item->parcial }}</td>
                    <td><a href="{{ url('/partial/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['PartialController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection