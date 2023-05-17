@extends('profile')

@section('profile-content')
    <div class="items">
        <a href="/orders" class="item"><img src="{{asset('img/icon60/clipboard.png')}}" width="100px" height="100px"><p>Текущие заказы</p></a>
        <a href="/orders-story" class="item"><img src="{{asset('img/icon60/clipboard.png')}}" width="100px" height="100px"><p>История заказов</p></a>
        <a href="/contacts" class="item">
            <img src="{{asset('img/icon60/loupe.png')}}" width="100px" height="100px"><p>Полезная информация</p>
        </a>
        <a href="/userdata" class="item"><img src="{{asset('img/icon60/user.png')}}" width="100px" height="100px"><p>Личные данные</p></a>
        <a href="/re-bin" class="item"><img src="{{asset('img/shop-icon.png')}}" width="100px" height="100px"><p>Корзина</p></a>
        <a href="/logout" class="item"><img src="{{asset('img/icon60/leave.png')}}" width="100px" height="100px"><p>Выйти</p></a>
    </div>
@endsection

