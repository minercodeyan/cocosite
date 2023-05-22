@extends('main-layout')

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs"><a href="/">Главная</a> > <a href="/catalog">Меню</a>> {{$category->title}}</div>

            <div class="product_list">
                @forelse($products as $key=>$product)
                    <div class="product_item">
                        <div class="prod_description">
                            <div><img class="product_item_img" src="{{asset($product->image)}}"></div>
                            <h2>{{$product->title}}</h2>
                            <p>{{$product->description}}</p>
                            <div class="price_block"><span>от <b>{{$product->price}}</b> руб</span>
                                <button name="btn" class="btn prod_btn">В корзину</button>
                                <input type="hidden" id="id{{$key}}" value="{{$product->id}}">
                                <input type="hidden" id="title2{{$key}}" value="{{$product->title}}">
                                <input type="hidden" id="price{{$key}}" value="{{$product->price}}">
                            </div>
                        </div>
                    </div>
                @empty
                    <div style="height: 200px; padding-top: 200px; font-weight: bold">НЕТ ПРОДУКТОВ</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let btns = document.getElementsByName('btn');

        btns.forEach(function(element, index, array) {
            element.onclick=function (e){
                this.disabled = true;
                this.style.background = 'grey'
                let arr = JSON.parse(localStorage.getItem('productsInBin')||'[]');

                arr.push({
                    id: document.getElementById('id'+index).value,
                    title: document.getElementById('title2'+index).value,
                    price:document.getElementById('price'+index).value
                    })
                localStorage.setItem('productsInBin',JSON.stringify(arr));
            }
        });

    </script>
@endsection
