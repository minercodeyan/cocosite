@extends('main-layout')

@section('content')
    <div class="preview">
        <div class="container">
            <div class="preview__inner">
                <div class="main_info">
                    <h1>СЛАДОСТИ РУЧНОЙ РАБОТЫ </h1>
                    <ul>
                        <li><img width="40" src="{{asset('img/icon60/pngegg 1.png')}}"><span>Лучшее какао из <b>Южной Америки</b></span>
                        </li>
                        <li><img width="40" src="{{asset('img/icon60/pngegg 1.png')}}"><span>Современной производство в
                                центре<br><b>Минска</b></span></li>
                        <li><img width="40"
                                 src="{{asset('img/icon60/pngegg 1.png')}}"><span>Отправка по Беларуси и СНГ<br><b>транспортной
                                компанией</b></span></li>
                    </ul>
                    <a class="btn main_btn" href="/products">
                        ВЫБРАТЬ СЛАДОСТЬ</i>
                    </a>
                </div>

                <div class="img_main">
                    <img src="{{asset('img/pngwing 9.png')}}" width="601"/>
                </div>
            </div>
            <div class="description">
                <div class="description_inner">
                    <a href="/products">
                    <div class="picture">
                        <img src="{{asset('img/pngwing 10.png')}}"/>
                        <div>
                          Печенье
                        </div>
                    </div>
                    </a>
                    <a href="/products">
                    <div class="picture">
                        <img src="{{asset('img/pngwing 8.png')}}"/>
                        <div>
                            Шоколад на заказ
                        </div>
                    </div>
                    </a>
                </div>
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
    <div class="info">
        <div class="container">
            <div class="info_inner">
                <h2>О НАС</h2>
                <div class="info_description">
                    <div class="info_imgs">
                        <img width="338" src="{{asset('img/shokolad1 1.png')}}"/>
                        <img width="338" src="{{asset('img/shokolad1 1.png')}}"/>
                    </div>
                    <div class="info_text">
                        <h3>Lorem ipsum dolor sit amet. Hic consequatur internos vel maxime sint At dicta dolor in
                            dolores nihil.</h3>
                        <p> In accusamus ducimus et quia nemo eum consequatur dolores quos inventore et quasi porro ut
                            quia necessitatibus.

                            Est laudantium unde aut alias saepe cum molestiae consequatur et nihil rerum sed dolor
                            maiores est dignissimos consequatur. Eum nulla quis hic numquam expedita ad obcaecati
                            mollitia ut harum facere non omnis quis. Et autem eaque ut minima ex officiis iste ut
                            delectus velit ut totam rerum aut reiciendis quia vel architecto consequuntur. Aut alias
                            similique ad tempora nihil sed quaerat provident.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="comments">
        <div class="container">
            <div class="comments_inner">
                <h2>ОТЗЫВЫ</h2>
                <div class="owl-carousel owl-theme">
                    @foreach($comments as $comment)
                        <div class="item">
                            <div class="comment_logo"><img src="{{asset('/img/1roiEyXKc-c 1.png')}}"/>
                            </div>
                            <p>{{$comment->name}}</p>
                            <div>{{$comment->city}}</div>
                            <p>{{$comment->description}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="contacts">
        <div class="container">
            <div class="contacts_inner">
                <h2>КОНТАКТЫ</h2>
                <div class="map_block">
                    <div id="map"></div>
                    <div>
                        <p>Часы работы 9.00-21.00</p>
                        <p>Телефон:<br>
                            +375 44 785 12 23</p>
                        <p>Почта:<br>
                            example@email.com</p>
                        <button class="btn">Обратный звонок</button>
                    </div>
                    <div>
                        <p>Адреса:</p>
                        <p> г. Минск,<br>
                            улица Гикало, 5</p>
                        <p> г. Борисов<br>
                            улица Ленина, 48</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
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
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        });

    </script>
@endsection
