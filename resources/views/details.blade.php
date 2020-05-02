@php
    /** @var \App\Game $game */
@endphp

@extends('templates.layout')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-dark color-white">
                        <h3>Detalles del juego</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset($game->image_url) }}" style="width:auto; height: 400px";>
                            </div>

                            <div class="col-8">
                                <br>
                                <h4><b>{{ $game->name }}</b></h4>
                                <p>
                                    <b>Descripción:</b> <br> {{ $game->description }}
                                </p>
                                <p>
                                    <b>Propietario:</b> {{ $game->user->name }}
                                </p>
                                <p>
                                    <b>Precio:</b> ${{ $game->price }}
                                </p>
                                <br>
                                <br>
                                <div class="text-right">
                                    <button class="btn btn-primary">Comprar</button>
                                </div>
                            </div>
                        </div>

                        <div class="row text-center mt-4">
                            <div class="col-12">
                                <iframe width="560" height="315" src="{{ str_replace('watch?v=', 'embed/', $game->trailer_url) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
