    <div class="form-group">
        {!! Form::label('schoolyear_id', 'Ciclo escolar: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('schoolyear_id', $schoolyears, 
null, 
['class' => 'form-control']) !!}
        </div>
    </div><div class="form-group">
        {!! Form::label('periodo', 'Periodo: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('periodo', array(1=>"1er.",2=>"2do"), 
null, 
['class' => 'form-control']) !!}
        </div>
    </div><div class="form-group">
        {!! Form::label('parcial', 'Parcial: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::select('parcial', array(1=>"1",2=>"2",3=>"3"), 
null, 
['class' => 'form-control']) !!}
        </div>
    </div><div class="form-group">
        {!! Form::label('inicio', 'Inicio: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::date('inicio', null, ['class' => 'form-control']) !!}
        </div>
    </div><div class="form-group">
        {!! Form::label('fin', 'Fin: ', ['class' => 'col-sm-3 control-label']) !!}
        <div class="col-sm-6">
            {!! Form::date('fin', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit($submit_text, ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>