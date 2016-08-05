<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <title>Ana Cláudia Maffia</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
