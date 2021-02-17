<h2>
    {{ $articulo->title }}
</h2>

<p>
    {{ $articulo->excerpt }}
    {{ $articulo->body }}
</p>

<p>
    @forelse ($articulo->tags as $tag)

        {{-- <a href="/articulos?tag={{ $tag->name }}">{{ $tag->name }}</a> --}}
        <a href="{{ route('articulos.index', ['tag'=> $tag->name]) }}">{{ $tag->name }}</a>
    @empty
        <p>No hay etiquetas que coincidan</p>
    @endforelse
</p>