@extends('main-layout')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="progress-m"><img src="{{asset('img/icon60/done-tick.png')}}" width="30">----------<img src="{{asset('img/icon60/done-tick.png')}}" width="30">----------<span class="current">3</span></div>
            <div class="profile-inner">
                <form class="rg-form" method="post" action="{{ route('step2') }}">
                    @csrf
                    <input type="hidden" required name="client_info_id" value="{{$clientInfoId}}">
                    <input style="margin: 20px 60px" name="email" type="email" placeholder="Email" required>
                    <input style="margin: 20px 60px" name="password" type="password" placeholder="Пароль" required>
                    <input style="margin: 20px 60px" name="passwrod_conf" type="password" placeholder="Подтвержение пароля" required>
                    <button type="submit" style="margin: 40px 340px" class="btn-2 big-btn">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                </form>
            </div>
        </div>
    </div>
@endsection

