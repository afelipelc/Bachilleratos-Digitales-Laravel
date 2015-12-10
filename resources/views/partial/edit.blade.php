@extends('layouts.master')

@section('content')

    <h1>Editar Parcial</h1>
    <hr/>

    {!! Form::model($partial, ['method' => 'PATCH', 'action' => ['PartialController@update', $partial->id], 'class' => 'form-horizontal']) !!}
        @include('partial/partials/_form', ['submit_text' => 'Actualizar'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection