<div class="form-group">
    {!! Form::label('nia', 'NIA: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::number('nia', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('nombre', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('apellidop', 'Apellido paterno: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('apellidop', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('apellidom', 'Apellido materno: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('apellidom', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('curp', 'CURP: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('curp', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('sexo', 'Sexo: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::radio('sexo', 'h', null,['class'=>'sh']) !!} Hombre <span class="spacer-h"></span>
        {!! Form::radio('sexo', 'm',null,['class'=>'sm']) !!} Mujer
    </div>
</div><div class="form-group">
    {!! Form::label('nacimiento', 'Nacimiento: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::date('nacimiento', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('entidadnacimiento', 'Entidad de nacimiento: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('entidadnacimiento', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('tiposangre', 'Tiposangre: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('tiposangre', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('domicilio', 'Domicilio: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('cp', 'C. P. ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::number('cp', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('colonia', 'Colonia: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('colonia', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('localidad', 'Localidad: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('localidad', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('municipio', 'Municipio: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('estado', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('tel', 'Tel: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('tel', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('cel', 'Cel: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('cel', null, ['class' => 'form-control']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
</div>
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>