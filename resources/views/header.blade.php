<div>
    <h1>Free Blogs</h1>
@if(Auth::check())
    <b>Bienvenido {{ Auth::user() -> name }}</b>
@endif
    <a href="/">Inicio</a>
@if(Auth::check())
    <a href="/logout">Cerrar sesion</a>
    <a href="/config">Perfil</a>
    <a href="/blog">Publicar</a>
@else
    <a href="/login">Iniciar sesion</a>
    <a href="/signup">Crea tu usuario</a>
@endif
    <br>
    <br>
</div>