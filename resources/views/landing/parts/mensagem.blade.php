{{--<div class="parallax-quote parallaxBg" style="background: url({{ URL::asset('img/servicos/IMAGEM_1.jpg') }}) 50% 0 repeat fixed;">--}}
<div class="parallax-quote parallaxBg" style="background: url({{ URL::asset($background) }}) 50% 0 repeat fixed;">
    <div class="container">
        <div class="parallax-quote-in">
            <p text-align="justify">
                {{--Ser arquiteto é fazer de simples traço a projeção de sonhos, a construção da realidade, do desejo em arte concreta.--}}
                {{ $mensagem }}
            </p>
            {{--<span class="color-green"></span>--}}
            <br>
            <small>{{ $author }}</small>
        </div>
    </div>
</div>
