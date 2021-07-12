@extends('layouts.main')

@section('title','Bem Vindo aos Eventos')


@section('content')



@if ($id != null)
    <p>Exibindo Produto: {{ $id }} </p>    
@else
    <p>Sem parametro</p>
@endif    

@endsection