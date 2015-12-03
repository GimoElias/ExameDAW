@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">ParticipantesEventos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('participantesEventos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($participantesEventos->isEmpty())
                <div class="well text-center">No ParticipantesEventos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Orador</th>
			<th>Palestrante</th>
			<th>Convidados</th>
			<th>Platea</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($participantesEventos as $participantesEvento)
                        <tr>
                            <td>{!! $participantesEvento->orador !!}</td>
					<td>{!! $participantesEvento->palestrante !!}</td>
					<td>{!! $participantesEvento->convidados !!}</td>
					<td>{!! $participantesEvento->platea !!}</td>
                            <td>
                                <a href="{!! route('participantesEventos.edit', [$participantesEvento->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('participantesEventos.delete', [$participantesEvento->id]) !!}" onclick="return confirm('Are you sure wants to delete this ParticipantesEvento?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection