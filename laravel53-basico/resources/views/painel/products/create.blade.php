@extends('painel.template.template')


@section('content')

<h1>{{$title or "Falha in controller"}}</h1>


@if(isset($produto))
    <form class="form" method="post" action="{{route('produtos.update', $produto->id)}}">
        {!! method_field('PUT') !!}
@else
    <form class="form" method="post" action="{{route('produtos.store')}}">

@endif

    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name-produto">Nome do Produto</label>

            @if(isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <div>
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            </div>
            @endif

        <input type="text"
               class="form-control"
               id="name-produto" name="name"
               value="{{$produto->name or  old('name')}}"
               placeholder="Nome do Produto">
    </div>
    <div class="checkbox">
        <label>
            <input type="checkbox"
                   name="active"
                   value="1"
                   @if(isset($produto) && $produto->active == '1')
                   checked
                   @endif
                   checked> Ativo?
        </label>
    </div>
    <div class="form-group">
        <label for="numero-produto">Número</label>
        <input type="text"
               class="form-control"
               id="numero-produto"
               name="number"
               value="{{$produto->number or  old('number')}}"
               placeholder="Numero do Produto">
    </div>
    <div class="form-group">
        <label for="numero-produto">Selecione a Categoria</label>
        <select name="category" class="form-control">
            <option value="">Escolha a Categoria</option>
            @foreach($categories as $category)
                <option value="{{$category}}"
                        @if(isset($produto) && $produto->category == $category)
                        selected
                        @endif
                        >
                    {{$category}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="descricao-produto">Descrição</label>
        <input type="text"
               class="form-control"
               id="descricao-produto"
               name="description"
               value="{{$produto->description or  old('description')}}"
               placeholder="Descrição">
    </div>

    <button type="submit" class="btn btn-default">Enviar</button>
</form>
@endsection