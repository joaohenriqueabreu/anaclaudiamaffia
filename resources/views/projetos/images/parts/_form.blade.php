<div class="row">
    {{ Form::label('Arquivo:') }}
</div>
<div class="row">
{{--    {{ Form::file('arquivo') }}--}}

    <script type="text/javascript" src="//api.filestackapi.com/filestack.js"></script>
    {{--<script type="text/javascript" src="js/custom.js"></script>--}}
    {{ Html::script(asset('js/custom.js')) }}

    {{--<input type="filepicker" name="arquivo" value="" data-fp-apikey="AVBGWkvEIQiSIj086FNlyz" id="filestack_picker" onchange="sendFile(event.fpfile.url)">--}}
    <input type="filepicker" data-fp-apikey="AVBGWkvEIQiSIj086FNlyz" id="filestack_picker" onchange="sendFile(event.fpfile.url)">
{{--    {{ Form::text('arquivo') }}--}}
    <input type="hidden" name="arquivo">
</div>

<div class="row">
    <div class="col-md-3">
        <div class="row">
            {{ Form::label('Legenda:') }}
        </div>
        <div class="row">
            {{ Form::text('legenda') }}
       </div>
    </div>
    <div class="col-md-3">
        <div class="row">
            {{ Form::label('Tipo:') }}
        </div>
        <div class="row">
            {{ Form::select('tipo', App\Image::getTipos()) }}
        </div>
    </div>
</div>

<div class="row">
    {{ Form::label('Descrição:') }}
</div>
<div class="row">
    {{ Form::textarea('descricao') }}
</div>

<div class="row">
    {{ Form::submit($submit_text, ['class' => 'btn primary'])}}
</div>