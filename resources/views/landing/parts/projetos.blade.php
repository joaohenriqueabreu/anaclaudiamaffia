<section id="projetos">
    <div class="row even-section">
        <div class="container content-md">
            <div class="g-heading-v7 text-center">
                {{--<h2 class="title-v2 title-center">PROJETOS</h2>--}}
                <h2 class="h2 g-mb-70"><em class="block-name">Projetos</em>Em breve o seu projeto também poderá estar aqui!</h2>
            </div>

            <div class="cube-portfolio container margin-bottom-20">
                <div class="margin-bottom-30">
                    <div id="filters-container" class="cbp-l-filters-text">
                        {{--<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todas </div> |--}}
                        {{--<div data-filter=".illustration" class="cbp-filter-item"> Residencial </div> |--}}
                        {{--<div data-filter=".web-design" class="cbp-filter-item"> Interiores </div> |--}}
                        {{--<div data-filter=".graphic" class="cbp-filter-item"> Comercial </div> |--}}
                        {{--<div data-filter=".logo" class="cbp-filter-item"> Conceito </div>--}}

                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> Todas </div>
                        |
                        @foreach ($categorias as $categoria)

                            <div data-filter=".{{ $categoria->nome }}"
                                 class="cbp-filter-item"> {{ $categoria->nome }}</div> |

                        @endforeach

                        {{--<div data-filter=".interiores" class="cbp-filter-item"> Interiores </div> |--}}
                        {{--<div data-filter=".comercial" class="cbp-filter-item"> Comercial </div> |--}}
                        {{--<div data-filter=".conceito" class="cbp-filter-item"> Conceito </div>--}}
                    </div><!--/end Filters Container-->
                </div>
                <div id="grid-container" class="cbp-l-grid-gallery">

                    {{--Loop para cada projeto em destaque--}}
                    @foreach($projetos as $projeto)

                        <div class="cbp-item {{ $projeto->categoria->nome }}">
                            <a href="{{ route('landing.parts.projeto.mini', $projeto->id) }}"
                               class="cbp-caption cbp-singlePageInline"
                               data-title="{{ $projeto->name }}<br>{{ $projeto->cidade }}">
                                <div class="cbp-caption-defaultWrap">
                                    <!--<img src="{{ $projeto->getImageArquivo('principal') }}" alt="">-->
                                    <img src="{{ URL::asset($projeto->getImageArquivo('principal')) }}" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap projetos-caption">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title projetos-caption-title">{{ $projeto->nome }}</div>
                                            <div class="cbp-l-caption-desc projetos-caption-subtitle">{{ $projeto->cidade }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                @endforeach

                <!-- Cube Portfolio -->

                </div><!--/end Grid Container-->
            </div>
            <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
                {{--<a href="ajax-juicy-projects/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">--}}
                    {{--<span class="cbp-l-loadMore-defaultText">LOAD MORE (<span class="cbp-l-loadMore-loadItems">6</span>)</span>--}}
                    {{--<span class="cbp-l-loadMore-loadingText">LOADING...</span>--}}
                    {{--<span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>--}}
                {{--</a>--}}
            </div>
            <!-- End Cube Portfolio -->
        </div>
    </div>
    <!-- End Projetos -->
</section>
