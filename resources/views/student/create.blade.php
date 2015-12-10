@extends('layouts.master')

@section('content')

    <h1>Create New Student</h1>
    <hr/>

    {!! Form::open(['url' => 'student', 'class' => 'form-horizontal']) !!}
        @include('student/partials/_form', ['text' => 'Registrar'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection