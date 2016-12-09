<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <title>Ana Claudia Maffia</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Open Graph data -->
    <meta property="og:title" content="Ana Claudia Maffia" />
    <meta property="og:type"  content="website" />
    <meta property="og:url" content="www.anaclaudiamaffia.com.br" />
    <meta property="og:image" itemprop="image" content="{{ asset('img/logo/logo1.png') }}" />
    <meta property="og:description" content="Ana Claudia Maffia Arquitetura e Interiores" />
    <meta property="og:site_name" content="Arquitetura e Interiores" />

    <link rel="icon" href="{{ asset('img/logo/logo2.png') }}">

    @include('layouts.styles')

    @section('styles')
        @show


</head>

    {{--<body id="body" class="header-fixed">--}}
    <body id="body" class="header-fixed">

        {{--<div class="wrapper">--}}

            @yield('variaveis')

            @include('layouts.parts.header')

            @yield('conteudo')

            @include('layouts.parts.footer')


        {{--</div><!--/wrapper-->--}}

    @include('layouts.scripts')

    @section('scripts')
        @show


    </body>
</html>
