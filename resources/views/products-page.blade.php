@extends('main-layout')

@section('content')

<div class="preview">
    <div class="container">
        <div class="breadcumbs">Главная - Шоколад - Готовые изделия</div>
        <div class="product_inner">
            <div class="product_list">
                @forelse($products as $product)
                <div class="product_item">
                    <div class="prod_description">
                        <h2>{{$product->title}}</h2>
                        <p>{{$product->description}}</p>
                        <div class="price_block"><span>от <b>{{$product->price}}</b> руб</span><a href="/products/{{$product->id}}" class="btn prod_btn">ПОДРОБНЕЕ</a></div>
                    </div>
                    <div class="prod_img"><img class="product_item_img" src="{{asset($product->image)}}"></div>
                </div>
                @empty
                    <div style="height: 200px; padding-top: 200px; font-weight: bold">НЕТ ПРОДУКТОВ</div>
                @endforelse
            </div>
            <aside class="aside">
                <form id="add-blog-post-form" method="get" action="{{url('/products')}}">
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="{{$category->id}}">
                                    <span>{{$category->title}}</span>
                                </label>
                            </li>
                        @endforeach
                        <li>
                            <button type="reset">
                                <div class="close"></div><div>Очистить</div>
                            </button>
                            <button type="submit">
                                <div class="submit"></div><div>Применить</div>
                            </button>
                        </li>
                    </ul>
                </form>

            </aside>
        </div>
    </div>
</div>
@endsection
