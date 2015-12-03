@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Eventos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('eventos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($eventos->isEmpty())
                <div class="well text-center">No Eventos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Tipo Id</th>
			<th>Titulo</th>
			<th>Descricao</th>
			<th>Local</th>
			<th>Programa</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($eventos as $evento)
                        <tr>
                            <td>{!! $evento->tipo_id !!}</td>
					<td>{!! $evento->titulo !!}</td>
					<td>{!! $evento->descricao !!}</td>
					<td>{!! $evento->local !!}</td>
					<td>{!! $evento->programa !!}</td>
                            <td>
                                <a href="{!! route('eventos.edit', [$evento->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('eventos.delete', [$evento->id]) !!}" onclick="return confirm('Are you sure wants to delete this Evento?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection