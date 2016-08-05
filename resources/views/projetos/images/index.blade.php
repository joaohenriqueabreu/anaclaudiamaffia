<hr></hr>
<div class="row">
    <div class="col-md-8">
        <h2>Imagens</h2>
    </div>

    <div class="col-md-4">
        <a href="{{ route('projetos.images.create', $projeto->id) }}" target="" class="btn btn-success">Adicionar imagem</a>
    </div>
</div>

<div class="row">
    <table class="table table-condensed table-striped">
        <thead>
        <tr>
            <th>Arquivo</th>
            <th>Legenda</th>
            <th>Tipo</th>
            <th>Descrição</th>
            <th>Preview</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projeto->images()->get() as $image)
            <tr>
                <td>{{ $image->arquivo }}</td>
                <td>{{ $image->legenda }}</td>
                <td>{{ $image->tipo }}</td>
                <td>{{ $image->descricao }}</td>
                <td>
{{--                    <a href="{{ route('projetos.images.show', [$projeto->id, $image->id]) }}" target="" class="btn btn-success">Ver</a>--}}
                    {{--<a href="{{ route('projetos.images.show', [$projeto->id, $image->id]) }}" target="" class="btn btn-danger">Ver</a>--}}
                    <div class="col-md-4">
                        {{ Html::link(route('projetos.images.show', [$projeto->id, $image->id]),
                            'V',
                            ['class'=>'btn btn-primary']) }}
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        {{ Html::link(route('projetos.images.edit', [$projeto->id, $image->id]),
                            'E',
                            ['class'=>'btn btn-default']) }}
                        &nbsp;
                    </div>
                    <div class="col-md-4">
                        {{ Form::open(array('route' => array('projetos.images.destroy', 'idProjeto'=>$projeto->id, 'id'=>$image->id), 'method' => 'delete')) }}
                            {{ Form::button('x', ['type'=>'submit', 'class' => 'delete btn btn-danger',
                                'onclick'=>'window.confirm(\'Deseja remover esta imagem?\');' ]) }}
                        {{ Form::close() }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
