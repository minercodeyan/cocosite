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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChocoShop</title>
</head>

<body>
<div class="header">
    <div class="container">
        <nav class="header_inner">
            <div class="logo">
                <a href="/" class="brand-logo"><img src="{{asset('img/логотип 1.png')}}"/></a>
            </div>
            <ul class="nav">
                <li><a href="/products">ПРОДУКЦИЯ</a></li>
                <li><a href="/about">О НАС</a></li>
                <li><a href="/delivery">ДОСТАВКА</a></li>
                <li><a href="/contacts">КОНТАКТЫ</a></li>
            </ul>
            <a href="/re-bin" class="re_bin">
                <img src="{{ asset('img/shop-icon-19 1.png') }}" width="43" height="43"/>
                <div class="re-bin-counter" id="main-counter">0</div>
            </a>
            <div>Для заказов<br>
                +375 44 485 23 12</div>
        </nav>
    </div>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="footer_inner">
            <div>Для заказов (9-21)<br>
                +375 44 485 23 12</div>

            <div>Электронная почта:<br>
                example@email.com
            </div>
            <div class="logo">
                <a href="#" class="brand-logo">Logo</a>
            </div>
            <div>Мы в соц сетях:
                <div class="logos">
                    <a>LOGO1</a><a>LOGO2</a>
                </div>
            </div>
            <div><a href="#">Договор</a><br><div style="margin-top: 10px">
                    <a href="#">Политика обработки</a>
                </div>
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
