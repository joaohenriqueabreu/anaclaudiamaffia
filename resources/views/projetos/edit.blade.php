@extends('projetos.layout')

@section('css')
  {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">--}}
@endsection

@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-edit"></i> Projetos / Edit #{{$projeto->id}}</h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">
            {{ Form::model($projeto, ['method' => 'PATCH', 'route' => ['projetos.update',$projeto->id]]) }}
                @include('projetos.parts._form',['submit_text' => 'Atualizar'])
            {{ Form::close() }}

        </div>
    </div>

    @include('projetos.images.index', ['projeto'=>$projeto])

@endsection
