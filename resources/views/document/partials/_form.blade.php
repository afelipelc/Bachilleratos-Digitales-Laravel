<div class="form-group">
                        {!! Form::label('tipo', 'Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::select('tipo', array('acta'=>'acta','migratorio'=>'migratorio','naturalizacion'=>'naturalizacion','sgnaletica'=>'sgnaletica'), null, ['class' => 'form-control documento']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('crip', 'Crip: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('crip', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('juzgado', 'Juzgado: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('juzgado', null, ['class' => 'form-control']) !!}
                        </div>
                    </div><div class="form-group">
                        {!! Form::label('nofolio', 'Nofolio: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::number('nofolio', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
        </div>    
    </div>