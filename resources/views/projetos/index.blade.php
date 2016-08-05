@extends('projetos.layout')

@section('header')
    <div class="page-header clearfix">
        <h1>
            <i class="glyphicon glyphicon-align-justify"></i> Projetos
            <a class="btn btn-success pull-right" href="{{ route('projetos.create') }}"><i class="glyphicon glyphicon-plus"></i> Novo</a>
        </h1>

    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if($projetos->count())
                <table class="table table-condensed table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Resumo</th>
                            <th>Descrição completa</th>
                            <th>Frase destaque</th>
                            <th>Categoria</th>
                            <th>Cidade</th>
                            <th class="text-right">Opções</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($projetos as $projeto)
                            <tr>
                                <td>{{ $projeto->id }}</td>
                                <td>{{ $projeto->nome }}</td>
                                <td>{{ $projeto->resumo }}</td>
                                <td>{{ $projeto->descricao_completa }}</td>
                                <td>{{ $projeto->frase_destaque }}</td>
                                <td>{{ $projeto->categoria->nome }}</td>
                                <td>{{ $projeto->cidade }}</td>
{{--                                <td>{{ $projeto->image->tipo }}</td>--}}
                                <td class="text-right">
                                    <a class="btn btn-xs btn-primary" href="{{ route('projetos.show', $projeto->id) }}"><i class="glyphicon glyphicon-eye-open"></i> Ver</a>
                                    <a class="btn btn-xs btn-warning" href="{{ route('projetos.edit', $projeto->id) }}"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                                    <form action="{{ route('projetos.destroy', $projeto->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Apagar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $projetos->render() !!}
            @else
                <h3 class="text-center alert alert-info">Empty!</h3>
            @endif

        </div>
    </div>

@endsection