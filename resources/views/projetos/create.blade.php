@extends('projetos.layout')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css"
          rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Projetos / Novo </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            {{ Form::model(new App\Projeto, ['method' => 'POST', 'route' => 'projetos.store']) }}
                @include('projetos.parts._form',['submit_text' => 'Novo'])
            {{ Form::close() }}
        </div>
    </div>
@endsection
