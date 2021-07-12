@extends('layouts.main')

@section('title','Bem Vindo aos Eventos')


@section('content')

<h1>Você esta na tela de Produtos</h1>

@if($busca != '')
<p> O Usuario esta buscando por: {{ $busca }} </p>
@endif

@endsection