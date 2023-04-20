@extends('main-layout')

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs"><a href="/">Главная</a> > Меню</div>

                <div class="product_list">
                    @forelse($categories as $category)
                        <div class="product_item">
                            <div class="prod_description">
                                <div><img class="product_item_img" src="{{$category->image}}"></div>
                                <h2>{{$category->title}}</h2>
                                <p>{{$category->description}}</p>
                                <div class="price_block"><a href="/catalog/{{$category->slug}}" class="btn prod_btn">ПОДРОБНЕЕ</a></div>
                            </div>
                        </div>
                    @empty
                        <div style="height: 200px; padding-top: 200px; font-weight: bold">НЕТ ПРОДУКТОВ</div>
                    @endforelse
                </div>
        </div>
    </div>
@endsection
