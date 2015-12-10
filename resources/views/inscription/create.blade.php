@extends('layouts.master')

@section('content')

    <h1>Inscribir Estudiante</h1>
    <hr/>

    {!! Form::open(['url' => 'inscription', 'class' => 'form-horizontal']) !!}

        @include('inscription/partials/_step1')
        {!! Form::hidden('student_id', 0, ['id'=>'student_id']) !!}
        @include('student/partials/_form', ['text' => 'Inscribir alumno'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection

@section('scripts')
    {!! Html::script('assets/js/functions.js') !!}
@endsection