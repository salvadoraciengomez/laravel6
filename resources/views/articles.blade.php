@extends ('layout')

@section ('content')
    <h1>CONTENIDO PRINCIPAL</h1>
@endsection

    <h2>Artículos:</h2>
    <ul>
        @foreach ($todos as $articulo)
        <li>
            <h3>{{ $articulo->title }}</h3>
            <p>{{ $articulo->excerpt }}</p>
        </li>
        @endforeach
    </ul>