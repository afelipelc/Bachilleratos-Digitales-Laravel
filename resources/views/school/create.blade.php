@extends('layouts.master')

@section('content')

    <h1>Añadir nuevo bachillerato</h1>
    <hr/>

    {!! Form::open(['url' => 'school', 'class' => 'form-horizontal']) !!}
    
        @include('school/partials/_form', ['submit_text' => 'Registrar'])
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection