@extends('painel.template.template')

@section('content')

    <h1 class="title-pg">
        <a href="{{route('produtos.index')}}"><spam class="glyphicon glyphicon-fast-backward"></spam></a>
        Produto: {{$produto->name}}
    </h1>
    @if(isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
            <div>
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        </div>
    @endif

    <p><b>Ativo: </b>{{$produto->active}}</p>
    <p><b>Número: </b>{{$produto->number}}</p>
    <p><b>Categoria: </b>{{$produto->category}}</p>
    <p><b>Descrição: </b>{{$produto->description}}</p>

<hr>

{!! Form::open(['route'=> ['produtos.destroy', $produto->id], 'method'=> 'DELETE']) !!}
    {!! Form::submit("Deletar: $produto->name", ['class'=> 'btn btn-danger']) !!}
{!! Form::close() !!}

@endsection

