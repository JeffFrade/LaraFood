@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1 class="m-0 text-dark">Planos</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    #filtros
                </div>

                <div class="card-body">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th width="50">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($plans as $plan)
                                <tr>
                                    <td>{{ $plan->name }}</td>
                                    <td>{{ $plan->price }}</td>
                                    <td><a href="" class="btn btn-warning">VER</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    {!! $plans->links() !!}
                </div>
            </div>
        </div>
    </div>
@stop
