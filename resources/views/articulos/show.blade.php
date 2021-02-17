<h2>
    {{ $articulo->title }}
</h2>

<p>
    {{ $articulo->excerpt }}
    {{ $articulo->body }}
</p>

<p>
    @foreach ($articulo->tags as $tag)

        <a href="">{{ $tag->name }}</a>
        
    @endforeach