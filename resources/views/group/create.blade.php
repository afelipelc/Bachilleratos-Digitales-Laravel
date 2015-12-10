@extends('layouts.master')

@section('content')

    <h1>Create New Group</h1>
    <hr/>

    {!! Form::open(['url' => 'group', 'class' => 'form-horizontal']) !!}
    
    @include('group/partials/_form', ['text' => 'Registrar grupo'])

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection