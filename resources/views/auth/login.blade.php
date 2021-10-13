@extends('layouts.app')

@section('content')
    <div class="body-login top-default">
       <img src="{{ asset('images/logo-restaurante.png') }}">

       <form class="form-login">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="Usuário">
           
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
            </div>

            <div class="d-grid">
                <button class="btn-login" type="submit">Entrar</button>
            </div>
      </form>
    </div>
@endsection