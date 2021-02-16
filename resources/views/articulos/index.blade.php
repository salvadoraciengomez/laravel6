@foreach ($articulos as $articulo)
    <h2>
        <a href="{{ route('articulos.show' , $articulo ) }}"> {{ $articulo->title }} </a>
    </h2>
    <p>
        {!! $articulo->excerpt !!}
    </p>
@endforeach