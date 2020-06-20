@extends('painel.template.template')


@section('content')

<h1>{{$title or "Falha in controller"}}</h1>

<form class="form" method="post" action="{{route('produtos.store')}}">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name-produto">Nome do Produto</label>
        <input type="text" class="form-control" id="name-produto" placeholder="Nome do Produto">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox" name="ativo" value="1" checked> Ativo?
        </label>
    </div>
    <div class="form-group">
        <label for="numero-produto">Número</label>
        <input type="text" class="form-control" id="numero-produto" placeholder="Numero do Produto">
    </div>
    <div class="form-group">
        <label for="numero-produto">Selecione a Categoria</label>
        <select name="categoria" class="form-control"></select>
    </div>

    <div class="form-group">
        <label for="descricao-produto">Número</label>
        <input type="text" class="form-control" id="descricao-produto" placeholder="Descrição">
    </div>

    <button type="submit" class="btn btn-default">Enviar</button>
</form>
@endsection