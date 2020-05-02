<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>


    <h1 class="text-center mt-5 color-white">¡Bienvenido!</h1>

    <div class="contenedor-form">
        <div class="toggle">
            <span>Crear cuenta</span>
        </div>

        <div class="formulario">
            <h2>Iniciar sesión</h2>
            <form method="POST" action="{{ route('login.auth') }}">
                @csrf

                <div class="form-group">
                    <label for="inp-email">Correo electrónico</label>
                    <input name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="inp-email"
                           value="{{ old('email', null) }}">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->get('email')[0] }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="inp-password">Contraseña</label>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="inp-password">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->get('password')[0] }}
                        </div>
                    @endif
                </div>

                <input class="mt-3" type="submit" value="Iniciar sesión">
            </form>
        </div>

        <div class="formulario">
            <h2>Crea tu cuenta</h2>
            <form method="POST" action="{{ route('signup') }}">
                @csrf

                <div class="form-group">
                    <label for="inp-name">Nombre</label>
                    <input name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="inp-name">
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->get('name')[0] }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="inp-phone">Teléfono</label>
                    <input name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="inp-password">
                    @if($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->get('phone')[0] }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="inp-email">Correo electrónico</label>
                    <input name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="inp-email">
                    @if($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->get('email')[0] }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="inp-password">Contraseña</label>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="inp-password">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->get('password')[0] }}
                        </div>
                    @endif
                </div>

                <input type="submit" class="mt-3" value="Registrarse">
            </form>
        </div>

        <div class="reset-password">
            <a href="#">Olvidé mi contraseña</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"
            integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
</body>
</html>
