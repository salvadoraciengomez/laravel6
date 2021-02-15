@extends ('layout')

@section('contenido')
    <style>
        .tieneError{
            color:red;
        }
    </style>
    <h1>Nuevo artículo:</h1>

    <form method="POST" action="/articulos">
        <!-- directiva cross site request  -->
        <!-- Evita que la llamada a store sea un 419:Expired -->
        <!-- Permite hacer la petición post desde otro origen (own server) que no es la url de entrada get-->
        <!-- Generará un input oculto con name=_token y value=uniqueTokenHashStr previniendo llamadas request desde otros servidores-->

        <!-- Muestra el uso de $errors @error {{old('')}} -->
        @csrf 
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="">
        <br>
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt" value=""></textarea>
        <br>
        <label for="title">Body:</label>
        <textarea 
            name="body" 
            id="body"
            ></textarea>
        <br>
        <button type="submit">Añadir</button>

    </form>
@endsection