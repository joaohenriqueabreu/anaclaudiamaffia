@extends('layouts.app')

@section('styles')
    @include('landing.styles')
@endsection

@section('variaveis')
    {{ $main_page = true }}
@endsection

@section('conteudo')
    @include('landing.parts.home')
    @include('landing.parts.perfil')
    @include('landing.parts.servicos')
    @include('landing.parts.metodologia')
    @include('landing.parts.diferencial')
    @include('landing.parts.projetos')
{{--    @include('landing.parts.blog')--}}
    @include('landing.parts.contato')
@endsection

@section('scripts')
    @include('landing.scripts')
@endsection