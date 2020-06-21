@extends('painel.template.template')

@section('content')

    <h1 class="title-pg">Listagem dos produtos</h1>

    <a href="{{route('produtos.create')}}" class="btn btn-primary btn-add">
        <span class="glyphicon glyphicon-plus"></span>
        Cadastrar
    </a>

    <table class="table table-striped">
        <tr>
            <td>Nome</td>
            <td>Descrição</td>
            <td>Ações</td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
                    {{--<a href="{{url("/painel/produtos/$product->id/edit")}}" class="edit actions">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>--}}
                    <a href="{{route('produtos.edit', $product->id)}}" class="edit actions">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="#" class="delete actions">
                        <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
