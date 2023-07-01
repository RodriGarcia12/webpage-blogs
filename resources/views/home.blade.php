<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    @if(session('goodLogin'))
        <b style="color: green;">Inicio de sesion exitoso</b><br>
    @endif
    @if(session('blogCreated'))
        <b style="color: green;">Tu blog ha sido creado!</b><br>
    @endif
    <header>
        @include('header')
    </header>
    
    <section>
        @foreach($blogs as $blog)
            <h4>{{ $blog -> title }}</h4>
            <blockquote>{{ $blog -> text }}</blockquote>
            <hr>
        @endforeach
    </section>
</body>
</html>