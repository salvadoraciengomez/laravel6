@foreach ($conversation->replies as $reply)
    <div>
        <p> {{ $reply->user->name }} said... </p>

        @if($reply->isBest())
            <span style="color:green">BestReply!</span>
        @endif

        {{ $reply->body }}

        @can ('update', $conversation)
            <form method="POST" action="/best-replies/{{ $reply->id }}">
                @csrf
                <button type="submit">Best Reply?</button>
            </form>
        @endcan
    </div>

    @continue($loop->last)
    <hr>
@endforeach