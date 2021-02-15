@foreach ($articulos as $articulo)
    <h2>
        <a href="/articulos/{{ $articulo->id }}"> {{ $articulo->title }} </a>
    </h2>
    <p>
        {!! $articulo->excerpt !!}
    </p>
@endforeach