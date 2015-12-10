@extends('layouts.master')

@section('content')

    <h1>Actualizar datos de inscripción</h1>
    <hr/>

    {!! Form::model($inscription->student, ['method' => 'PATCH', 'action' => ['InscriptionController@update', $inscription->id], 'class' => 'form-horizontal']) !!}

        @include('inscription/partials/_step1')
        @include('student/partials/_form', ['text' => 'Actualizar datos'])

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