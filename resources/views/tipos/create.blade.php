@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'tipos.store']) !!}

        @include('tipos.fields')

    {!! Form::close() !!}
</div>
@endsection
