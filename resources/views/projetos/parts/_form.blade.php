<div class="row">
    <div class="col-md-6">
        <div class="row">
            {{ Form::label('Nome:') }}
        </div>

        <div class="row">
            {{ Form::text('nome') }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            {{ Form::label('Categoria:') }}
        </div>
        <div class="row">
            {{ Form::select('categoria_id', App\Projeto::getCategorias()) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            {{ Form::label('Frase de destaque:') }}
        </div>
        <div class="row">
            {{Form::text('frase_destaque') }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            {{ Form::label('Cidade:') }}
        </div>
        <div class="row">
            {{Form::text('cidade') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="row">
            {{ Form::label('Resumo:') }}
        </div>
        <div class="row">
            {{ Form::textarea('resumo') }}
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            {{ Form::label('Descrição completa:') }}
        </div>
        <div class="row">
            {{Form::textarea('descricao_completa') }}
        </div>
    </div>
</div>

<div class="row">
    {{ Form::submit($submit_text, ['class' => 'btn primary'])}}
</div>

