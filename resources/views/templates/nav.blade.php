<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
    <a class="navbar-brand" href="#">Videojuegos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100">
            <li class="nav-item ml-auto">
                <a class="nav-link" href="{{ route('web_home') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web_catalog') }}">Catálogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('web_game_create') }}">Agregar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Cerrar sesión</a>
            </li>
        </ul>
    </div>
</nav>
