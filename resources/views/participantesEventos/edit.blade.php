@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($participantesEvento, ['route' => ['participantesEventos.update', $participantesEvento->id], 'method' => 'patch']) !!}

        @include('participantesEventos.fields')

    {!! Form::close() !!}
</div>
@endsection
