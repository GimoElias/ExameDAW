<!--- Tipo Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    {!! Form::text('tipo_id', null, ['class' => 'form-control']) !!}
</div>

<!--- Titulo Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!--- Descricao Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!--- Local Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('local', 'Local:') !!}
    {!! Form::text('local', null, ['class' => 'form-control']) !!}
</div>

<!--- Programa Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('programa', 'Programa:') !!}
    {!! Form::text('programa', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
