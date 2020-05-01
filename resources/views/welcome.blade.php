<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    
    <h1><center>Login</center></h1>
    

    <div class="contenedor-form">
        <div class="toggle">
            <span>Crear cuenta</span>
        </div>

        <div class="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="#">
                <input type="email" placeholder="Correo Electronico" required>
                <input type="password" placeholder="Contraseña" required>
                
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="#">
                <input type="text" placeholder="Nombre" required>
                <input type="email" placeholder="Correo Electronico" required>
                <input type="password" placeholder="Contraseña" required> 
                <input type="text" placeholder="Teléfono">                
                <input type="submit" value="Registrarse">
            </form>
        </div>

        <div class="reset-password">
            <a href="#">Olvide mi Contraseña</a>
        </div>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>