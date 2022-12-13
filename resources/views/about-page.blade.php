@extends('main-layout')

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs">Главная - О нас</div>
            <h1 class="about_h1">О НАС</h1>
            <div class="about_inner1">
                <div class="about_inner1-text">
                    <h2>lorem ipsum dolor sit amet.
                             Hic consequatur internos vel
                        maxime sint At dicta dolor in dolores nihil.</h2>
                    <p>In accusamus ducimus et quia nemo eum
                        consequatur dolores quos inventore et
                        quasi porro ut quia necessitatibus.</p>
                    <p>In accusamus ducimus et quia nemo eum
                        consequatur dolores quos inventore et
                        quasi porro ut quia necessitatibus.</p>
                </div>
                <img src="{{asset('img/about.png')}}">
            </div>
            <div class="about_inner2">
                <div class="about_images">
                    <img src="{{asset('img/lol.png')}}">
                    <img src="{{asset('img/chocolate_handmade-candy_a71f 1.png')}}">
                </div>
                <div class="about_inner1-text">
                    <h2>lorem ipsum dolor sit amet.
                        Hic consequatur internos vel
                        maxime sint At dicta dolor in dolores nihil.</h2>
                    <p>In accusamus ducimus et quia nemo eum
                        consequatur dolores quos inventore et
                        quasi porro ut quia necessitatibus.</p>
                    <p>In accusamus ducimus et quia nemo eum
                        consequatur dolores quos inventore et
                        quasi porro ut quia necessitatibus.</p>
                </div>
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
            <div class="email-choco">
                <input id="username" type="text" name="email" placeholder="example@email.ex"
                       /><button class="btn">продписаться</button>
            </div>
        </div>
    </div>

@endsection
