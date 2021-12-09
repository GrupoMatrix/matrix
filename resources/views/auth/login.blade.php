@extends('layouts.app')

@section('content')
    <div class="body-login top-default">
       <img src="{{ asset('images/logo-restaurante.png') }}">

       <form class="form-login" action="/login" method="POST">
        {{csrf_field()}}
            <div class="form-floating mb-3">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="floatingInput" placeholder="Email">
                {!! $errors->first('email', '<div class="alert alert-error">:message</div>') !!}
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="floatingPassword" placeholder="Senha">
                {!! $errors->first('password', '<div class="alert alert-error">:message</div>') !!}
            </div>

            <div class="d-grid">
                <button class="btn-login" type="submit">Entrar</button>
            </div>
      </form>
    </div>
@endsection