@extends('projetos.layout')

@section('styles')
    @include('projetos.styles')
@endsection

@section('variaveis')
    {{ $main_page = false }}
@endsection


@section('content')

<div class="row">
    <div class="col-md-4">
        {{ $image->legenda }} <br>
        {{ $image->descricao }} <br>
        {{ $image->tipo }} <br>
        {{ Html::link(route('projetos.edit',$image->projeto->id),'Voltar',['class'=>'btn btn-danger']) }}

    </div>
    <div class="col-md-8">
        {{ Html::image(asset($image->arquivo), '',['style'=>'max-width: 300px; max-height: 300px;']) }}
    </div>
</div>

@endsection
