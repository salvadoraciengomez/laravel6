@foreach ($articulos as $articulo)
    <h2>
        <a href="{{ $articulo->path()  }}"> {{ $articulo->title }} </a>
    </h2>
    <p>
        {!! $articulo->excerpt !!}
    </p>
@endforeach