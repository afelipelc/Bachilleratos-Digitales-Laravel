@extends('layouts.master')

@section('content')

    <h1>Edit Group</h1>
    <hr/>

    {!! Form::model($group, ['method' => 'PATCH', 'action' => ['GroupController@update', $group->id], 'class' => 'form-horizontal']) !!}

    @include('group/partials/_form', ['text' => 'Actualizar grupo'])

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection