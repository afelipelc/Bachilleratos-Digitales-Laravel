@extends('layouts.master')

@section('content')

    <h1>Create New Schoolyear</h1>
    <hr/>

    {!! Form::open(['url' => 'schoolyear', 'class' => 'form-horizontal']) !!}
    
    <div class="form-group">
                        {!! Form::label('titulo', 'Titulo: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection