@extends('layout')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css"
          rel="stylesheet">
@endsection

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Adicionar imagem para o projeto {{ $projeto->nome }} </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            {{ Form::model(new App\Image, ['method' => 'POST', 'route' => ['projetos.images.store',$projeto->id], 'files'=>'true']) }}
                @include('projetos.images.parts._form',['submit_text' => 'Novo'])
            {{ Form::close() }}
        </div>
    </div>
@endsection