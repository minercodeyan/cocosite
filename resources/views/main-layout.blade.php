<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@500&family=Inter:wght@500&family=Montserrat:wght@400;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alerts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChocoShop</title>
</head>

<body>
@include('flash-messages')

<div class="header">
    <div class="container">
        <nav class="header_inner">
            <div class="logo">
                <a href="/" class="brand-logo"><img width="150px"  src="{{asset('img/логотип 1.png')}}"/></a>
                <p>Хороший кейтеринг</br> для вашего мероприятия</p>
            </div>
            <ul class="nav">
                <li><a href="/catalog">Меню</a></li>
                <li><a href="/about">Кейтеринг</a></li>
                <li><a href="/delivery">Фуршет</a></li>
                <li><a href="/">Кофе-брейк</a></li>
                <li><a href="/">Фуд-боксы</a></li>
                <li><a href="/contacts">Контакты</a></li>
                @if($user = Auth::user())
                    <li><a href="/profile">{{$user->name}}</a></li>
                @else
                    <li><a href="/login">Войти</a></li>
                @endif
            </ul>
            <a href="/re-bin" style="margin-top: 20px">
                <img src="{{ asset('img/shop-icon.png') }}" width="50" />
            </a>
        </nav>
    </div>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="footer_inner">
            <div>ИНФОРМАЦИЯ<br>
                <ul>
                    <li> Как сделать заказ</li>
                    <li> Условия доставки</li>
                    <li> Как получить скидку</li>
                </ul>
            </div>

            <div>Mеню<br>
                <ol>
                    <li> Кейтериенг</li>
                    <li> Фуршет</li>
                    <li> Кофе-брейк</li>
                    <li> Фуд-боксы</li>
                    <li> Прокат</li>
                    <li> Контакты</li>
                </ol>
            </div>
            <div>
                <b class="title">Контакты</b><br>
                <p>+375 (29) 1111</p>
                <p>info@bigupcatering.by</p>
                <p>
                    logo1 logo2
                </p>
            </div>
        </div>
        <div class="args">
            <div>
                @2022 БигАп....
            </div>
            <div>
                Политика конфиденциальности
            </div>
        </div>
    </div>
</div>
<script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
<script>
    document.getElementById('main-counter').innerText=JSON.parse(localStorage.getItem('productsInBin')).length
</script>
@yield('scripts')
</body>

</html>
