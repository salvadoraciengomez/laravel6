@extends('layout')

@section('contenido')
    <h1>Editar artículo:</h1>

    <form method="POST" action="/articulos/{{ $articulo->id }}">
        <!-- directiva cross site request  -->
        <!-- Evita que la llamada a store sea un 419:Expired -->
        <!-- Permite hacer la petición post desde otro origen (own server) que no es la url de entrada get-->
        <!-- Generará un input oculto con name=_token y value=uniqueTokenHashStr previniendo llamadas request desde otros servidores-->
        @csrf 
        @method('PUT')
        <!-- Se le aplica el método put al submit -->
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $articulo->title }}">
        <br>
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt">{{ $articulo->excerpt }}</textarea>
        <br>
        <label for="title">Body:</label>
        <textarea name="body" id="body">{{ $articulo->body }}</textarea>
        <br>
        <button type="submit">Actualizar</button>

    </form>
@endsection