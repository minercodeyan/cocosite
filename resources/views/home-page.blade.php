@extends('main-layout')

@section('content')
    <div class="container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide1">
                    <div>
                        <div class="slide1-title">
                            <h1>Выездное<br> обслуживание<br> вашего<br> мероприятия </h1>

                                <p>Хотите заказать кейтеринг недорого?<br>
                                Оставте ваши контактные данные и мы</br>
                                    расскажем все подробно</br>
                                <a href="/lol" class="btn">Оставить<br>контакты</a>
                                </p>
                        </div><img src="{{asset('img/main.jpg')}}" alt="main">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide4">
                    <div>
                        <div class="slide4-title">
                            <h1>Запишитесь на персональную<br>
                                консультацию по подбору<br>
                                варианта обслуживания вашего<br>
                                мероприятия
                            </h1>

                            <p>Согласуйте со специалистом дату, время и удобный для<br>
                                вас способ проведения консультации.
                            </p>
                        </div>
                        <form class="form">
                            <input type="text" name="lol" placeholder="введите имя">
                            <label for="phone">Номер телефона</label>
                            <input type="tel" name="phone">
                            <button class="btn-2" type="submit">Записаться на консультанию</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide5">
                    <div>
                        <img src="{{asset('img/about.png')}}" alt="main">
                        <div class="slide1-title">
                            <h1>О нас</h1>

                            <p>BigUp - профессианальный ресторан выездного обслуживания.<br>

                                Поможем организовать гастрономическое сопровождение вашего
                                мероприятия от свадьбы до бизнес встречи под ключ.<br>
                                Работаем с любыми бюджетами!
                                Учитываем все пожелания и условия мероприятия.<br>

                                За годы своей деятельности наша компания показала себя, как
                                надёжный кейтеринг-партнёр для крупного бизнеса и ответственный
                                подрядчик на частных небольших мероприятиях. Обладая большим
                                опытом в реализации нестандартных решений, специалисты BigAp
                                посоветуют лучшее для вашего мероприятия.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    </div>
    <div class="preview">
        <div class="container">
            <div class="description">
                <h2>Наши приемущества</h2>
                <div class="description_cards">
                    <div class="description_card">Продукция соостветсвует гост 19792-2017. Обязательная проверка каждой
                        партии
                    </div>
                    <div class="description_card">Доставка от трех дней по РБ. Доставка курьером или самовывоз в г.
                        Минск и г. Борисов
                    </div>
                    <div class="description_card">Эклологически чистая продукция, привезенная из Южной Америки и Конго
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 8,
            });
        }

        window.initMap = initMap;
    </script>
    <script>
        let swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

    </script>
@endsection
