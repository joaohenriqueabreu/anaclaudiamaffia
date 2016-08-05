@extends('layouts.app')

@section('styles')
    @include('projetos.styles')
@endsection

@section('variaveis')
    {{ $main_page = false }}
@endsection


@section('conteudo')

    <!--=== Content Part ===-->
    <section id="show_projeto_{{ $projeto->id }}" class="even-section">

    <div class="container">
        <div class="row">
            <p style="height: 150px; min-height: 150px;">&nbsp;</p>
        </div>
    </div>

    <!--=== Breadcrumbs ===-->
    {{--<div class="breadcrumbs">--}}
        {{--<div class="container even-section">--}}
            {{--<h1 class="pull-left">{{ $projeto->nome }}</h1>--}}
            {{--<ul class="pull-right breadcrumb">--}}
                {{--<li><a href="index.html">Home</a></li>--}}
                {{--<li><a href="">Portfolio</a></li>--}}
                {{--<li class="active">{{ $projeto->nome }}</li>--}}
            {{--</ul>--}}
        {{--</div><!--/container-->--}}
    {{--</div><!--/breadcrumbs-->--}}
<!--=== End Breadcrumbs ===-->

    <div class="container content">
        <div class="row portfolio-item margin-bottom-50">
            <!-- Carousel -->
            <div class="col-md-7">
                <div class="carousel slide carousel-v1" id="myCarousel">
                    <div class="carousel-inner">
{{--                        @for ($i = 0; $i < 4; $i++)--}}
{{--                        {{ $i=0 }}--}}
                        <?php $i = 0 ?>
                        @foreach ($projeto->images()->get() as $image)
                            @if ($i == 0)
                                <div class="item active">
                            @else
                                <div class="item">
                            @endif
                                    {{--<img class="imagem-projeto" src="{{ URL::asset($projeto->getImageArquivo('principal')) }}">--}}
                                    {{ Html::image(asset($image->arquivo), '', ['class'=>'imagem-projeto']) }}
                                    <div class="carousel-caption">
                                        <p style="color:#706f6f;">
                                            {{ $image->legenda }}
                                        </p>
                                        <p style="color:#00a19a;">
                                            {{ $image->descricao }}
                                        </p>
                                    </div>
                            @if ($i == 0)
                                </div>
                            @else
                                </div>
                            @endif
                            <?php $i++ ?>
                        @endforeach
                        {{--@endfor--}}
                    </div>

                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>

                <!-- End Carousel -->

                <!-- Content Info -->
                <div class="col-md-5">
                    <h2>Detalhes do projeto</h2>
                    <p>
                        {{ $projeto->descricao_completa }}
                    </p>
                    <ul class="list-unstyled">
{{--                        <li><i class="fa fa-user color-green"></i> {{ $projeto->nome_cliente }}</li>--}}
                        {{--<li><i class="fa fa-calendar color-green"></i> {{ $projeto->cidade }}</li>--}}
                        <li>
                            <i class="fa fa-tags color-green"></i> {{ $projeto->categoria->nome . ', ' . $projeto->cidade }}
                        </li>
                    </ul>
                </div>

                <!-- End Content Info -->
            </div><!--/row-->

            <div class="tag-box tag-box-v2">
                <p>
                    {{ $projeto->frase_destaque }}
                </p>
            </div>

            <div class="margin-bottom-20 clearfix"></div>
        {{--</div>--}}

        <!-- Recent Works -->
        <div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
            <div class="headline"><h2 class="pull-left">Outros projetos</h2>
                <div class="owl-navigation">
                    <div class="customNavigation">
                        <a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
                        <a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div><!--/navigation-->
            </div>

            <div class="owl-recent-works-v1">
                @foreach ($projeto->outrosProjetos() as $outro)
                <div class="item">
                    <a href="{{ route('projetos.show', $outro->id) }}">
                        <em class="overflow-hidden">
                            <img class="img-responsive" src="{{ URL::asset($outro->getImageArquivo('mini')) }}" alt="">
                        </em>
							<span>
								<strong>{{ $outro->nome }}</strong>
								<i>{{ $outro->cidade }}</i>
							</span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Recent Works -->
    </div><!--/container-->
        <!--=== End Content Part ===-->

    </section>

@endsection


@section('scripts')
    @include('projetos.scripts')
@endsection








{{--<!-- Recent Works -->--}}
{{--<div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">--}}
{{--<div class="headline"><h2 class="pull-left">Recent Works</h2>--}}
{{--<div class="owl-navigation">--}}
{{--<div class="customNavigation">--}}
{{--<a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>--}}
{{--<a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>--}}
{{--</div>--}}
{{--</div><!--/navigation-->--}}
{{--</div>--}}

{{--<div class="owl-recent-works-v1">--}}
{{--<div class="item">--}}
{{--<a href="#">--}}
{{--<em class="overflow-hidden">--}}
{{--<img class="img-responsive" src="assets/img/main/img1.jpg" alt="">--}}
{{--</em>--}}
{{--<span>--}}
{{--<strong>Happy New Year</strong>--}}
{{--<i>Anim pariatur cliche reprehenderit</i>--}}
{{--</span>--}}
{{--</a>--}}
{{--</div>--}}
{{--<div class="item">--}}
{{--<a href="#">--}}
{{--<em class="overflow-hidden">--}}
{{--<img class="img-responsive" src="assets/img/main/img2.jpg" alt="">--}}
{{--</em>--}}
{{--<span>--}}
{{--<strong>Award Winning Agency</strong>--}}
{{--<i>Responsive Bootstrap Template</i>--}}
{{--</span>--}}
{{--</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- End Recent Works -->--}}
{{--</div><!--/container-->--}}
{{--<!--=== End Content Part ===-->--}}


{{--<!-- JS Global Compulsory -->--}}
{{--{{ Html::script(asset('plugins/jquery/jquery.min.js'))}}--}}
{{--{{ Html::script(asset('plugins/jquery/jquery-migrate.min.js'))}}--}}
{{--{{ Html::script(asset('plugins/bootstrap/js/bootstrap.min.js'))}}--}}
{{--<!-- JS Implementing Plugins -->--}}
{{--{{ Html::script(asset('plugins/back-to-top.js'))}}--}}
{{--{{ Html::script(asset('plugins/smoothScroll.js'))}}--}}
{{--{{ Html::script(asset('plugins/owl-carousel/owl-carousel/owl.carousel.js'))}}--}}
{{--<!-- JS Customization -->--}}
{{--{{ Html::script(asset('js/custom.js'))}}--}}
{{--<!-- JS Page Level -->--}}
{{--{{ Html::script(asset('js/app.js'))}}--}}
{{--{{ Html::script(asset('js/plugins/style-switcher.js'))}}--}}
{{--{{ Html::script(asset('js/plugins/owl-recent-works.js'))}}--}}
{{--<script type="text/javascript">--}}
{{--jQuery(document).ready(function() {--}}
{{--App.init();--}}
{{--StyleSwitcher.initStyleSwitcher();--}}
{{--OwlRecentWorks.initOwlRecentWorksV1();--}}
{{--});--}}
{{--</script>--}}
{{--<!--[if lt IE 9]>--}}
{{--{{ Html::script(asset('plugins/respond.js'))}}--}}
{{--{{ Html::script(asset('plugins/html5shiv.js'))}}--}}
{{--{{ Html::script(asset('plugins/placeholder-IE-fixes.js'))}}--}}
{{--<![endif]-->--}}
{{--</body>--}}
{{--</html>--}}
