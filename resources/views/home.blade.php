@php
    /** @var \App\Game[] $games */
@endphp

@extends('templates.layout')

@section('title', 'Home')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-dark color-white">
                        <h1>¡Bienvenido!</h1>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($games as $i => $game)
                                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                        <img src="{{ asset($game->image_url) }}" class="d-block mx-auto w-50">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <h3 class="text-center color-white mt-3">¡Estás en el sitio correcto!</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
