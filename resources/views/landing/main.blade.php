@extends('layouts.app')

@section('styles')
    @include('landing.styles')
@endsection

@section('variaveis')
    {{ $main_page = true }}
@endsection

@section('conteudo')
    @include('landing.parts.home')
    {{--// Temporario para depois alterar o texto--}}
    @php ($mensagem = "Aqui vem a mensagem 1")
    @include('landing.parts.mensagem')

    @include('landing.parts.perfil')

    @php ($mensagem = "Aqui vem a mensagem 2")
    @include('landing.parts.mensagem')

    @include('landing.parts.servicos')
{{--    @include('landing.parts.metodologia')--}}
    @php ($mensagem = "SER ARQUITETO É FAZER DE SIMPLES TRAÇO A PROJEÇÃO DE SONHOS, A CONSTRUÇÃO DA REALIDADE, DO DESEJO EM ARTE CONCRETA")
    @include('landing.parts.mensagem')

    @include('landing.parts.diferencial')
    @include('landing.parts.faq')
    @include('landing.parts.projetos')
{{--    @include('landing.parts.blog')--}}
    @include('landing.parts.contato')
    @include('landing.parts.map')
@endsection

@section('scripts')
    @include('landing.scripts')
@endsection