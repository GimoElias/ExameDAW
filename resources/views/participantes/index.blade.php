@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Participantes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('participantes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($participantes->isEmpty())
                <div class="well text-center">No Participantes found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nome</th>
			<th>Apelido</th>
			<th>Grauacademico</th>
			<th>Empresa</th>
			<th>Datanascimento</th>
			<th>Sexo</th>
			<th>Telefone</th>
			<th>Email</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($participantes as $participante)
                        <tr>
                            <td>{!! $participante->nome !!}</td>
					<td>{!! $participante->apelido !!}</td>
					<td>{!! $participante->grauacademico !!}</td>
					<td>{!! $participante->empresa !!}</td>
					<td>{!! $participante->datanascimento !!}</td>
					<td>{!! $participante->sexo !!}</td>
					<td>{!! $participante->telefone !!}</td>
					<td>{!! $participante->email !!}</td>
                            <td>
                                <a href="{!! route('participantes.edit', [$participante->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('participantes.delete', [$participante->id]) !!}" onclick="return confirm('Are you sure wants to delete this Participante?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection