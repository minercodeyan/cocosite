@extends('main-layout')

@section('content')
    <div class="login-page">
        <div class="container">
            <div class="login-page-inner">
                <h1>Войти</h1>
                <form class="form-login" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-field">
                        @error('auth')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                        <input id="username" type="text"
                               class="form-control @error('email') is-invalid @enderror" name="email" required
                               autocomplete="email" autofocus>
                    </div>
                    <div class="form-field">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password"
                               required autocomplete="current-password">
                    </div>

                    <div class="form-check">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span>Запомнить меня</span>
                        </label>
                    </div>

                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Войти
                        </button>
                        <a style="text-decoration: underline; margin-left: 30px" href="/register">Регистрация</a>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
