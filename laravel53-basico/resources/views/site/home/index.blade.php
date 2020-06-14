@extends('site.template.template1')

@section('content')
<h1>Home Page - Com template</h1>
   {{-- {{$xss}} <script>alert("atack XSS")</script>--}}
{{--{!! $xss !!}--}} <!--Executa-->

    @if($var1 == 0)
    <p>é igual a Zero</p>
    @else
    <p>Diferente de zaro | {{$var1}}</p>
    @endif

    @unless($var1 == 122)
    <p>Não é igual ... unless</p>
    @endunless

    @for($i = 0; $i < 5; $i++)
    <p><small>For Valor = {{$i}}</small></p>
    @endfor

    @foreach($arrayData as $array)
        <p>Foreach valor = <small>{{$array}}</small></p>
    @endforeach

    @if(count($arrayData) > 0)
        @foreach($arrayData as $array)
            <p><small>{{$array}}</small></p>
        @endforeach
    @else
        <p>Não existe itens a semrem impressos</p>
    @endif

    {{--Mais simples--}}
    @forelse($arrayData as $array)
        <p>ForElse {{$array}}</p>
    @empty
        <p>Não existe dados no ForElse</p>
    @endforelse

    @include('site.includes.sidebar', compact('var1'))


@endsection
