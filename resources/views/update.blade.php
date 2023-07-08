@include('header')

<form action="/updateBlog" method="post">
        @csrf

        Titulo: <input type="text" name="title" id=""><br><br>
            Contenido del blog: <br>
            <textarea name="text" id="" style="height: 200px; width: 800px;"></textarea>
        <input type="submit" value="Actualizar">
    </form>