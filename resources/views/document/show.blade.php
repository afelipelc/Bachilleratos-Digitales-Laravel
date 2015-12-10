@extends('layouts.master')

@section('content')

    <h1>Document</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Tipo</th><th>Crip</th><th>Juzgado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $document->id }}</td> <td> {{ $document->tipo }} </td><td> {{ $document->crip }} </td><td> {{ $document->juzgado }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection