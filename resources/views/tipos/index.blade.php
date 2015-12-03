@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Tipos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('tipos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($tipos->isEmpty())
                <div class="well text-center">No Tipos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Name</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($tipos as $tipo)
                        <tr>
                            <td>{!! $tipo->name !!}</td>
                            <td>
                                <a href="{!! route('tipos.edit', [$tipo->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('tipos.delete', [$tipo->id]) !!}" onclick="return confirm('Are you sure wants to delete this Tipo?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection