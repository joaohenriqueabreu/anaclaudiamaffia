<!--=== Header v6 ===-->
{{--<nav class="architecture-nav one-page-header one-page-header-style-2 navbar" role="navigation">--}}
<nav class="navbar custom-navbar" role="navigation">
<div class="header header-v6 header-white-transparent header-sticky">
    <!-- Topbar blog -->
    <div class="blog-topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-8">
                    <div class="topbar-toggler"><span class="fa fa-angle-down"></span></div>
                    <ul class="topbar-list topbar-menu">
                        <li><a href="#contato">ana@anaclaudiamaffia.com.br</a></li>
                        <li><a href="#contato">+55 31 98874-3863</a></li>
                        {{--<li class="cd-log_reg hidden-sm hidden-md hidden-lg"><strong><a class="cd-signin"--}}
                                                                                        {{--href="login.html">Login</a></strong>--}}
                        {{--</li>--}}
                    </ul>
                </div>
                <div class="col-sm-4 col-xs-4 clearfix">
                    <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">
                        {{--<li class="cd-log_reg home"><a class="cd-signin" href="login.html">Login</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar blog -->

    <!-- Navbar -->
    <div class="navbar mega-menu" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Navbar Brand -->
                <div class="navbar-brand">
                    <a href="{{ route('landing.home') }}">
                        <!-- <img class="default-logo" src="img/logo3-light.png" alt="Logo"> -->
                        <img class="default-logo" src="{{URL::asset('img/logo/logo1.png')}}" alt="Logo">
                        <img class="shrink-logo" src="{{ URL::asset('img/logo/logo1.png')}}" alt="Logo">
                    </a>
                </div>
                <!-- ENd Navbar Brand -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <div class="menu-container">
                    <ul class="nav navbar-nav">
                        @if ($main_page)
                        <li class="page-scroll">
                            <a href="#home">
                                Home
                            </a>
                        </li>

                        <li class="page-scroll">
                            <a href="#perfil">
                                Perfil
                            </a>
                        </li>

                        <li class="page-scroll">
                                <a href="#diferencial">
                                    Diferencial
                                </a>
                        </li>
                            
                        <li class="page-scroll">
                            <a href="#servicos">
                                Serviços
                            </a>
                        </li>
                        
                        <!-- End Blog -->

                        <!-- Portfolio -->
                        {{--<li class="page-scroll">--}}
                            {{--<a href="#metodologia">--}}
                                {{--Metodologia--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <!-- End Portfolio -->

                            <!-- Portfolio -->
                      
                            <!-- End Portfolio -->

                        <!-- Features -->
                        <li class="page-scroll">
                            <a href="#projetos">
                                Projetos
                            </a>
                        </li>
                        <!-- End Features -->

                        {{--<!-- Shortcodes -->--}}
                        {{--<li class="page-scroll">--}}
                            {{--<a href="#blog">--}}
                                {{--Blog--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        <!-- End Shortcodes -->

                        <!-- Demo Pages -->
                        <li class="page-scroll">
                            <a href="#contato">
                                Contato
                            </a>
                        </li>
                        <!-- End Demo Pages -->
                        @else

                        <li class="page-scroll">
                            <a href="{{ route('landing.home') }}">
                                Home
                            </a>
                        </li>

                        @endif
                    </ul>
                </div>
            </div><!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header v6 ===-->
</nav>
