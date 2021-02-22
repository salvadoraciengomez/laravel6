@extends('layouts.app')
@section ('content')
    <ul>
        @foreach ($notifications as $notification)
            @if ($notification->type === 'App\Notifications\PaymentReceived')
                <li>We have received a payment of {{ $notification->data['amount'] }} from you</li>
            @endif
        @endforeach
    </ul>
@endsection