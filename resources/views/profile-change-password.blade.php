@extends('profile')

@section('profile-content')
    <form class="form-login" method="POST" action="{{ route('change-password') }}">
        @csrf
        <div class="form-field">
            @error('auth')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                        </span>
            @enderror
            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Старый пароль') }}</label>

            <input id="username" type="password"
                   class="form-control @error('email') is-invalid @enderror" name="old_password" required
                   autocomplete="password" autofocus>
        </div>
        <div class="form-field">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Новый пароль') }}</label>

            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror" name="new_password"
                   required autocomplete="current-password">
        </div>

        <div class="col-md-8 offset-md-4" style="margin-top: 30px">
            <button type="submit" class="btn btn-primary">
                Сменить пароль
            </button>
        </div>
    </form>
@endsection
