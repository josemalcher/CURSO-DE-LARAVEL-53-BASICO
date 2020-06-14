@extends('site.template.template1')

@section('content')
<h1>Home Page - Com template</h1>
   {{-- {{$xss}} <script>alert("atack XSS")</script>--}}
{!! $xss !!} <!--Executa-->
@endsection
