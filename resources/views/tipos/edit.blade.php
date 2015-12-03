@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($tipo, ['route' => ['tipos.update', $tipo->id], 'method' => 'patch']) !!}

        @include('tipos.fields')

    {!! Form::close() !!}
</div>
@endsection
