<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <header>
        @include('header')
    </header>

    <section>
        <form action="/createUser" method="post">
            @csrf
            
            Nombre: <input type="text" name="name" id="">
            Apellido: <input type="text" name="surname" id="">
            Correo electronico: <input type="email" name="email" id="">
            Contraseña <input type="password" name="password" id="">
            <input type="submit" value="Crear usuario">
        </form>
    </section>
</body>
</html>