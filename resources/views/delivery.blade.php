@extends('main-layout')

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs">Главная - Доставка</div>
            <h1 class="about_h1">Доставка</h1>
            <div class="delivery-inner">
                <img width="593px" height="409px" src="{{asset('img/тачка.png')}}">
                <div class="about_inner1-text">
                    <h2>Бесплатная доставка -при сумме заказа от 50 рублей в пределах МКАД.</h2>

                    <p>При сумме заказа от 35 руб - стоимость доставки 8 рублей.<br>
                    Стоимость доставки за пределы МКАД -8 руб при минимальной сумме заказа от 50 руб
                    </p>
                    <p>После оформления заказа, в течении 30 минут с вами свяжется администратор, взвесит выбранный торт и сообщит окончательную стоимость заказа.
                    </p>
                    <p>Доставка осуществляется с 10:00 до 20:00.<br>
                    В городе Минск в пределах МКАД.<br>
                    При заказе день в день: время доставки может варьироваться, в зависимости от нагрузки 1-2 часа.<br>
                    Предзаказ на определенное время возможен минимум за 1 сутки.<br>
                        Выходные и праздничные дни возможно увеличение времени доставки.</p>

                    <p>Способ оплаты : наличными или картой курьеру при получении заказа,онлайн(по системе ЕРИП).</p>

                </div>

            </div>
        </div>
    </div>

@endsection