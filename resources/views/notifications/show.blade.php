@extends('layouts.app')
@section ('content')
    <ul>
        @forelse ($notifications as $notification)
            @if ($notification->type === 'App\Notifications\PaymentReceived')
                <li>We have received a payment of {{ $notification->data['amount'] }} from you</li>
            @endif
        @empty
                <li>No hay notificaciones nuevas</li>
        @endforelse
    </ul>
@endsection