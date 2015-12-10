@extends('layouts.master')

@section('content')

    <h1>Registrar Parcial</h1>
    <hr/>

    {!! Form::open(['url' => 'partial', 'class' => 'form-horizontal']) !!}
        @include('partial/partials/_form', ['submit_text' => 'Registrar'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection