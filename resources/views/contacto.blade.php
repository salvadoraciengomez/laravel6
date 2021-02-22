@extends ('layout')

@section ('contenido')
    <h1>CONTENIDO PRINCIPAL</h1>
@endsection

<form method="POST" action="/contact">
    @csrf
    <label for="email">Dirección de correo:
    </label>
    <br>
    <input typer="text" id="email" name="email">
    <br>
    {{-- Frontend email verification --}}
    @error('email')
        <p style="color:red">{{ $message }}</p>
    @enderror
    <br>
    <button type="submit">Email me</button>
    @if(session('message'))
        <p style="color:green">
            {{ session('message') }}
        </p>
    @endif

</form>
<!-- <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login')) --}}
                <div class="top-right links">
                    {{-- @auth --}}
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                    {{-- @else --}}
                        {{-- <a href="{{ route('login') }}">Login</a> --}}

                        {{-- @if (Route::has('register')) --}}
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        {{-- @endif --}}
                    {{-- @endauth --}}
                </div>
            {{-- @endif --}}

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->