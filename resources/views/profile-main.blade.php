@extends('profile')

@section('profile-content')
    <div class="items">
        <div class="item"><img src="{{asset('img/icon60/clipboard.png')}}" width="100px" height="100px"><p>Текущие заказы</p></div>
        <div class="item"><img src="{{asset('img/icon60/clipboard.png')}}" width="100px" height="100px"><p>История заказов</p></div>
        <div class="item">
            <img src="{{asset('img/icon60/loupe.png')}}" width="100px" height="100px"><p>Полезная информация</p>
        </div>
        <div class="item"><img src="{{asset('img/icon60/user.png')}}" width="100px" height="100px"><p>Личные данные</p></div>
        <div class="item"><img src="{{asset('img/shop-icon.png')}}" width="100px" height="100px"><p>Корзина</p></div>
        <div class="item"><img src="{{asset('img/icon60/leave.png')}}" width="100px" height="100px"><p>Выйти</p></div>
    </div>
@endsection

