@foreach ($conversation->replies as $reply)
    <div>
        <p> {{ $reply->usuario->name }} said... </p>

        {{ $reply->body }}

        @can ('update-conversation', $conversation)
            <form method="POST" action="best-replies/{{ $reply->id }}">
                @csrf
                <button type="submit">Best Reply?</button>
            </form>
        @endcan
    </div>

    @continue($loop->last)
    <hr>
@endforeach