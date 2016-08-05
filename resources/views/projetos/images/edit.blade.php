@extends('projetos.layout')

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css"
          rel="stylesheet">
@endsection

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Atualizar imagem {{ $projeto->nome }} </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            {{ Form::model($image, ['method' => 'PATCH',
                'route' => array('projetos.images.update', 'idProjeto'=>$projeto->id, 'id'=>$image->id), 'files'=>'true']) }}
                @include('projetos.images.parts._form',['submit_text' => 'Atualizar'])
            {{ Form::close() }}
        </div>
    </div>
@endsection