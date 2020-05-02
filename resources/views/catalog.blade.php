@php
    /** @var \App\Game[] $games */
@endphp

@extends('templates.layout')

@section('content')

    <div class="container my-3">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Videojuegos disponibles</h1>
                <h4>Selecciona el artículo de tu gusto</h4>
            </div>
        </div>

        <div class="row mt-3">
            @foreach($games as $game)
                <div class="col-4 px-4 mb-4">
                    <div class="card p-2 h-100">
                        <div class="card-body text-center">
                            <img src="{{ asset($game->image_url) }}" alt="Card image" height="280px" class="mx-auto">

                            <h4 class="card-title mt-4">{{ $game->name }}</h4>
                            <p class="card-text"></p>
                            <a href="{{ route('web_details', ['gameId' => $game->id]) }}" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
