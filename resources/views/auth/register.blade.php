
@extends('layouts.app')

@section('content')
    <div class="body-login top-default">
       <img src="{{ asset('images/logo-restaurante.png') }}">

       <form class="form-login" action="/register" method="POST">
        {{csrf_field()}}
        <div class="form-floating mb-3">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nome completo">
            {!! $errors->first('name', '<div class="alert alert-error">:message</div>') !!}
        </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                {!! $errors->first('email', '<div class="alert alert-error">:message</div>') !!}
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Senha">
                {!! $errors->first('password', '<div class="alert alert-error">:message</div>') !!}
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" placeholder="Repititr Senha">
                {!! $errors->first('password_confirmation', '<div class="alert alert-error">:message</div>') !!}
            </div>

            <div class="d-grid">
                <button class="btn-login" type="submit">Registrar</button>
            </div>
      </form>
    </div>
@endsection