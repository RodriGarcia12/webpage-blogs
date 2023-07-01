<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        @include('header')
    </header>

    <section>
        @if(session('userCreated'))
        <b><p style='color=green'>Creaste tu usuario de manera correcta, inicia sesion para comenzar a crear blogs!</p></b><br>
        @endif
        <form action="/loginUser" method="post">
            @csrf
            Correo electronico: <input type="email" name="email" id="">
            Contraseña <input type="password" name="password" id="">
            <input type="submit" value="Iniciar sesion">
        </form>
    </section>
</body>
</html>