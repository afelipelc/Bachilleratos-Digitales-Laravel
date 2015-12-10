@extends('layouts.master')

@section('content')

    <h1>Documento probatorio</h1>
    <hr/>
    

    {!! Form::model($inscription->student->document, ['method' => 'PATCH', 'action' => ['InscriptionController@update', $inscription->id], 'class' => 'form-horizontal']) !!}
        @include('inscription/partials/_datosalumno')
        {!! Form::hidden('student_id','0') !!}
        @include('document/partials/_form', ['text' => 'Actualizar documento'])
    {!! Form::hidden('step', '3') !!}

    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection