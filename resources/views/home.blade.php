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
            <b style="color: grey;">Escrito por: {{ $blog -> author }}</b>
            <blockquote>{{ $blog -> text }}</blockquote>
            <b style="color: grey;">{{ $blog -> created_at }}</b>
            <a href="/update/{{ $blog -> id }}">Modificar</a>
            <a href="/delete/{{ $blog -> id}}">Eliminar</a>
            <hr>
        @endforeach
    </section>
    {{ $blogs->links() }}
</body>
</html>