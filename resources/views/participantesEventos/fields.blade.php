<!--- Orador Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('orador', 'Orador:') !!}
    {!! Form::text('orador', null, ['class' => 'form-control']) !!}
</div>

<!--- Palestrante Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('palestrante', 'Palestrante:') !!}
    {!! Form::text('palestrante', null, ['class' => 'form-control']) !!}
</div>

<!--- Convidados Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('convidados', 'Convidados:') !!}
    {!! Form::text('convidados', null, ['class' => 'form-control']) !!}
</div>

<!--- Platea Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('platea', 'Platea:') !!}
    {!! Form::text('platea', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
