@extends('layouts.app')

@section('content')

    <div class="welcome">
        <img src="{{ asset('images/logo-restaurante.png') }}">
        <h1> 
            Seja bem-vindo! Para iniciar o atendimento é preciso realizar o  <a href="{{ route('login') }}">login!</a>
        </h1>
    </div>
    @if (Route::has('login'))
        <div class="botton-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
            @endif
    
@endsection