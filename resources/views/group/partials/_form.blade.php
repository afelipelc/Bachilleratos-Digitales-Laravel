<div class="form-group">
            {!! Form::label('school_id', 'Escuela: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                <strong>
                    {{ !empty($inscription) ? $inscription->school->nombre : $user->school->nombre }}
                </strong>
            </div>
        </div><div class="form-group">
            {!! Form::label('schoolyear_id', 'Ciclo escolar: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                <strong>
                    {{ !empty($inscription) ? $inscription->schoolyear->titulo :$schoolyear->titulo }}
                </strong>
            </div>
        </div><div class="form-group">
                    {!! Form::label('semester_id', 'Semestre: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('semester_id', $semesters, null, ['class' => 'form-control']) !!}
                    </div>
                </div><div class="form-group">
                    {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>
                </div><div class="form-group">
                    {!! Form::label('user_id', 'Tutor: ', ['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
                    </div>
                </div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
    </div>    
</div>