@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'participantesEventos.store']) !!}

        @include('participantesEventos.fields')

    {!! Form::close() !!}
</div>
@endsection
