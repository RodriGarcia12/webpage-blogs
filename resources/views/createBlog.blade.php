<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea tu blog</title>
</head>
<body>
    
    <header>
        @include('header')
    </header>
    <h1>Crea tu propio blog!</h1>
    <section>
        <form action="/createBlog" method="post">
            @csrf
            Titulo del blog: <input type="text" name="title" id=""> <br><br>
            Contenido del blog: <br>
            <textarea name="text" id="" style="height: 200px; width: 800px;"></textarea>
            <br><br>
            <input type="submit" value="Crear">
        </form>
    </section>
</body>
</html>