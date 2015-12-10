@extends('layouts.master')

@section('content')

    <h1>Documents <a href="{{ url('/document/create') }}" class="btn btn-primary pull-right btn-sm">Add New Document</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>SL.</th><th>Tipo</th><th>Crip</th><th>Juzgado</th><th>Actions</th>
                </tr>
            </thead>                
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($documents as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/document', $item->id) }}">{{ $item->tipo }}</a></td><td>{{ $item->crip }}</td><td>{{ $item->juzgado }}</td>
                    <td><a href="{{ url('/document/'.$item->id.'/edit') }}"><button type="submit" class="btn btn-primary btn-xs">Update</button></a> / {!! Form::open(['method'=>'delete','action'=>['DocumentController@destroy',$item->id], 'style' => 'display:inline']) !!}<button type="submit" class="btn btn-danger btn-xs">Delete</button>{!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection