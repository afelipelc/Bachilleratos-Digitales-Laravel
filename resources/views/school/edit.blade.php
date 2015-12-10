@extends('layouts.master')

@section('content')

    <h1>Actualizar: <i>{{ $school->nombre }}</i></h1>
    <hr/>

    {!! Form::model($school, ['method' => 'PATCH', 'action' => ['SchoolController@update', $school->id], 'class' => 'form-horizontal']) !!}

        @include('school/partials/_form', ['submit_text' => 'Actualizar'])
    
        
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection