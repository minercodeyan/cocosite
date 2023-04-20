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
                        <form class="form" method="POST" action="{{ route('make-application') }}">
                            @csrf
                            <input type="text" name="client_name" placeholder="введите имя" required>
                            <label for="phone" >Номер телефона</label>
                            <input type="tel" value="+375 ( )" name="client_phone" minlength="5" required>
                            <input type="hidden" name="app_type" value="0">
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
                    <div class="description_card">
                        <h3>удобство</h3>
                        <p>Есть возможность
                        самостоятельно собрать и
                        оформить заказ online.
                            Понятная и прозрачная смета</p>
                    </div>
                    <div class="description_card"><h3>ассортимент</h3>
                        <p>Более 2 000 блюд, подходящих
                            для свадеб, юбилеев, детских
                            праздников, кофе-пауз,
                            событий в офисе, знаковых дат
                            и вечеринок</p>
                    </div>
                    <div class="description_card"><h3>упаковка</h3>
                        <p>Всю еду мы упаковываем в
                            специальные боксы с удобной
                            съемной крышкой, которые не
                            повреждают внешний вид
                            закусок</p>
                    </div>
                    <div class="description_card"><h3>качество</h3>
                        <p>Все блюда готовятся из
                            свежайших продуктов, которые
                            ежедневно проходят контроль
                            качества</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="preview">
        <div class="container">
            <div class="description">
                <h2>Оставьте заявку</h2>
                <form class="form-comment" method="POST" action="{{ route('make-application') }}">
                    @csrf
                    <p>Ваш личный помощник от компании BigUp поможет с подбором формата обслуживания
                        мероприятия, посоветует топовые позиции меню и просчитает итоговую стоимость.</p>
                    <div>
                        <input type="text" name="client_name" placeholder="введите имя" required>
                        <input type="text" name="client_name" placeholder="введите имя" required>
                    </div>
                    <textarea  placeholder="введите комментарий..." rows="16"  name="client_comment"></textarea>
                    <button class="btn-2" type="submit">Отправить</button>
                </form>
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
