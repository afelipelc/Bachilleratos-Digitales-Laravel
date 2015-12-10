<div class="form-group">
    {!! Form::label('school_id', 'Escuela: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        <strong>
            {{ !empty($inscription) ? $inscription->school->nombre : Auth::user()->school->nombre }}
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
        {!! Form::hidden('step', '1') !!}
    </div>
</div><div class="form-group">
    {!! Form::label('group_id', 'Grupo: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::select('group_id', $groups, null, ['class' => 'form-control']) !!}
        {!! Form::hidden('step', '1') !!}
    </div>
</div>
