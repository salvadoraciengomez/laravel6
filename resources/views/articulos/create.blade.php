@extends ('layout')

@section('contenido')
    <style>
        .tieneError{
            color:red;
        }
    </style>
    <h1>Nuevo artículo:</h1>

    <form method="POST" action="/articulos">
        <?php
        //<!-- directiva cross site request  -->
        //<!-- Evita que la llamada a store sea un 419:Expired -->
        //<!-- Permite hacer la petición post desde otro origen (own server) que no es la url de entrada get-->
        //<!-- Generará un input oculto con name=_token y value=uniqueTokenHashStr previniendo llamadas request desde otros servidores-->

        //<!-- Muestra el uso de $errors @error {{old('')}} -->
        ?>
        @csrf 
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
            @if($errors->has('title'))
                <p style="color:red">Título no suministrado</p>
            @endif
        <br>
        <label for="excerpt">Excerpt:</label>
        <textarea name="excerpt" id="excerpt" value="{{ old('excerpt') }}"></textarea>
            @error('excerpt')
                <p style="color:red">{{ $errors->first('excerpt') }}</p>
            @enderror
        <br>
        <label for="body">Body:</label>
        <textarea class="@error('body') tieneError @enderror" 
            name="body" 
            id="body"
            value="{{ old('body') }}"
            >{{ old('body') }}</textarea>
            @error('body')
                <p class="tieneError">{{ $errors->first('body') }}</p>
            @enderror
        <br>
        <label for="tags">Tags:</label>
        <select name="tags[]"
                multiple>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
            @error('tags')
                <p class="tieneError">{{ $message }}</p>
            @enderror
        <button type="submit">Añadir</button>

    </form>
@endsection