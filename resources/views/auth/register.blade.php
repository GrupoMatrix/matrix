
@extends('layouts.app')

@section('content')
    <div class="body-login top-default">
       <img src="{{ asset('images/logo-restaurante.png') }}">

       <form class="form-login" action="/register" method="POST">
        {{csrf_field()}}
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" placeholder="Nome completo">
        </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email">
           
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" placeholder="Senha">
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Repetir Senha">
            </div>

            <div class="d-grid">
                <button class="btn-login" type="submit">Registrar</button>
            </div>
      </form>
    </div>
@endsection