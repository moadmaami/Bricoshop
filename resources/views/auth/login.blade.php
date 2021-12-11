@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html"><span>Brico-Shop</span></a>
                </div>
                <div class="login-form">
                    <h4>Connexion</h4>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">mot de passe</label>
                            <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror name="password" required autocomplete="current-password" placeholder="Mot de passe">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi
                            </label>
                            <label class="pull-right">
                                <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                        <div class="register-link m-t-15 text-center">
                            <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}">S'inscrire</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
