@extends('layouts.master')

@section('content')

    <h1>Edit Student</h1>
    <hr/>

    {!! Form::model($student, ['method' => 'PATCH', 'action' => ['StudentController@update', $student->id], 'class' => 'form-horizontal']) !!}

        @include('student/partials/_form', ['text' => 'Actualizar'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
