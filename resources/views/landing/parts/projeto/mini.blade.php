<div class="cbp-l-inline">
    <div class="cbp-l-inline-left">
        <img src="{{$projeto->getImageArquivo('mini')}}" alt="Dashboard" class="cbp-l-project-img">
{{--        {{Html::image(asset( $projeto->img_path_mini)) }}--}}
    </div>

    <div class="cbp-l-inline-right">
        <div class="cbp-l-inline-title projetos-caption-title">{{ $projeto->nome }}</div>
        <div class="cbp-l-inline-subtitle projetos-caption-subtitle">{{ $projeto->cidade }}</div>

        <div class="cbp-l-inline-desc" align="justify">
            {{ $projeto->resumo }}
        </div>

        <a href="{{ route('projetos.show', $projeto->id) }}" target="_blank" class="cbp-l-inline-view projetos-misc">Ver projeto</a>
    </div>
</div>