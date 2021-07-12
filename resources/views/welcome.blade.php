@extends('layouts.main')

@section('title','Bem Vindo aos Eventos')


@section('content')


        <h1> Vocês esta na tela inicial</h1>

        <form method="GET">
            <label>Numero </label>
            <input type="text" name="numero"> 
            <input type="submit" name="testar">
        </form>

        <img src="/img/banner.jpg" alt="Banner"/>


        @if (1>5)
        <p> True</p>
        @else
        <p>False</p>
        @endif

        <p> Nome: {{$nome}}</p>
        <p> Idade: {{$idade}}</p>
        <p> Profissao: {{$profissao}}</p>


        @for ( $i = 0 ; $i < count($arr); $i++)
        <p> Numero: {{ $arr[$i] }} </p>
      

        @if ($i==4)
        <p>Nome: {{$nome}} e {{$arr[$i] }} </p>            
        @endif
      
        @endfor

        {{-- Comentário com Blade --}}

        <!-- Comentario com HTML -->

        @foreach ($arr as $arr )

        <p> Este é o Index {{ $loop->index}}</p>
        <p> Este é o numero {{ $arr }}
        @endforeach

@endsection
  
