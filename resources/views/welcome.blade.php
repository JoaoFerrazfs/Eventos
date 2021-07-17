@extends('layouts.main')

@section('title','Bem Vindo aos Eventos')


@section('content')

<div id="search-container" class="col-md-12">
    <h1> Busque um evento <h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar evento">
        </form>
</div>        
        <div id="events-container" class="col-md-12">
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
            <div id="cards-container" class="row">
                @foreach ($events as $events )
                <div class="card col-md-3">
                    <img src="/img/events/{{ $events->image }}" alt="{{$events->tile}}">
                    <div class="card-body">
                        <p class="card-date"> 10/09/2020 </p>
                        <h5 class="card-title"> {{ $events->title}} </h5>
                        <p class="card-participants"> X Participantes </p>                        
                        <a href="/events/{{$events->id}}" class="btn btn-secondary">Saber mais</a>
                    </div>   
                </div>    
                @endforeach    
                
            </div>   
        </div>



