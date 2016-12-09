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
    @php ($mensagem = "Realizar os SONHOS dos nossos clientes, superando sempre suas EXPECTATIVAS. Através de um atendimento DIFERENCIADO, mostrar a eles como o arquiteto pode ser um ALIADO, auxiliando em TODAS as etapas de desenvolvimento, levando QUALIDADE DE VIDA e CONFORTO ao seu dia a dia. Desenvolver um trabalho com PROFISSIONALISMO e RESPEITO ao cliente.")
    @include('landing.parts.mensagem')

    @include('landing.parts.perfil')

    @php ($mensagem = "Ser um escritório referência em QUALIDADE, INOVAÇÃO e DIFERENCIAÇÃO dos projetos. Colocar os SONHOS dos clientes sempre à frente, respeitando suas INDIVIDUALIDADES. Ser reconhecido por nossos clientes como PARCEIROS e agentes facilitadores para a realização de seus OBJETIVOS.")
    @include('landing.parts.mensagem')

    @include('landing.parts.diferencial')
    @php ($mensagem = "TRANSPARÊNCIA, DISCIPLINA e COMPROMETIMENTO no atendimento aos clientes. ATENÇÃO e CUIDADO ao desenvolver cada projeto. Busca constante de CONHECIMENTO e INOVAÇÃO.")
    @include('landing.parts.mensagem')
    @include('landing.parts.servicos')
{{--    @include('landing.parts.metodologia')--}}
       @include('landing.parts.faq')
    @include('landing.parts.projetos')
{{--    @include('landing.parts.blog')--}}
    @include('landing.parts.contato')
    @include('landing.parts.map')
@endsection

@section('scripts')
    @include('landing.scripts')
@endsection
