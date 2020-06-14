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

    @push('script')
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    @endpush

@endsection
