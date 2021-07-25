@extends('layouts.main')

@section('title','Bem Vindo aos Eventos')


@section('content')


<div id="search-container" class="col-md-12">
    <h1> Busque um evento <h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar evento">
        </form>
</div>        
        <div id="events-container" class="col-md-12">
           @if ($search)
            <h2>Buscando por : {{$search}} </h2>
            @else
            <h2>Proximos Eventos</h2>
            @endif
            <p class="subtitle">Veja os eventos dos próximos dias</p>
            <div id="cards-container" class="row">
                @foreach ($events as $events )
                <div class="card col-md-3">
                    <img src="/img/events/{{ $events->image }}" alt="{{$events->tile}}">
                    <div class="card-body">
                        <p class="card-date"> {{date('d/m/Y'), strtotime($events->date)}} </p>
                        <h5 class="card-title"> {{ $events->title}} </h5>
                        <p class="card-participants"> {{count($events->users)}} Participantes </p>                        
                        <a href="/events/{{$events->id}}" class="btn btn-secondary">Saber mais</a>
                    </div>   
                </div>    
                @endforeach  
                @if($search )
                    <p>Não foi possivel encontrar nenhum evento com {{$search}} <a href="/"> Ver todos.</a>
                @elseif ($events= 0 &&  count($events) == 0 )
                    <p>Não há eventos disponíveis</p>
                @endif
            </div>   
        </div>

@endsection

