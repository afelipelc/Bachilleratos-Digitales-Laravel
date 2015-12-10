@extends('layouts.master')

@section('content')

    <h1>Datos del tutor</h1>
    <hr/>
    
    {!! Form::model($inscription->student->tutor, ['method' => 'PATCH', 'action' => ['InscriptionController@update', $inscription->id], 'class' => 'form-horizontal']) !!}

        @include('inscription/partials/_datosalumno')
        {!! Form::hidden('tutor_id', 0, ['id'=>'tutor_id']) !!}
        @include('tutor/partials/_form', ['text' => 'Actualizar tutor'])
    {!! Form::hidden('step', '2') !!}

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