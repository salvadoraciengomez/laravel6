@extends('layouts.app')
@section ('content')
    <ul>
        @foreach ($notifications as $notification)
            <li>{{ $notification->type }}</li>
        @endforeach
    </ul>
@endsection