@extends('main-layout')
@section('local-style')
    <style>
        .swiper-slide {
            height: 600px;
            font-size: 18px;
            display: flex;
            border-radius: 20px;
            background: #cac8c4;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .swiper-slide h2{
            margin: 30px 10px;
        }

        .swiper-slide img {
            height: 270px;
            width: 100%;
            object-fit: cover;
        }
        .swiper-slide p{
            margin: 40px 10px;
        }
    </style>
@endsection

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs">Главная - Фуршет</div>
            <h1 class="about_h1">Фуршет</h1>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($cateringItems as $cateringItem)
                        <div class="swiper-slide">
                            <h2>{{$cateringItem->name}}</h2>
                            <img src="{{$cateringItem->city}}">
                            <p>{{$cateringItem->description}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="partners">
                <p>Если вы хотите предложить нам сотрудничество:</p>
                <p>Сделать коммерческое предложение о поставке продукции:<br>
                    example@email.com</p>
                <p>Сделать коммерческое предложение о рекламе или продвижении:<br>
                    example@email.com</p>
                <p>По другим вопросам:<br>
                    example@email.com</p>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        const swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 1,
            loop: true,
            speed: 600,
            spaceBetween: 150,
            //  autoplay: {
            //      delay: 3000,
            //   },

            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },

            breakpoints: {
                320: {
                    slidesPerView: 2,
                },
                560: {
                    slidesPerView: 3,
                },
                990: {
                    slidesPerView: 3,
                }
            },

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection
