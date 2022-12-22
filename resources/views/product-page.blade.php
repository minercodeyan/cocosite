@extends('main-layout')

@section('content')
    <div class="product-view">
        <div class="container">
            <div class="breadcumbs">Главная - Шоколад - Готовые изделия - {{$product->title}}</div>
            <div class="product-view-inner">
                <div class="product-view-img">
                    <img src="{{asset('img/products/Chocolate cookies.png')}}">
                    <img style="margin-left: 100px" width="470" src="{{asset('img/Доставка.png')}}">
                </div>
                <div class="product-view-description">
                    <h1 id="title">{{$product->title}}</h1>
                    <p>{{$product->description}}</p>
                    <div><b id="prise">{{$product->price}}</b> p
                    <button id="btn" class="btn re_btn">В корзину</button>
                        <input type="hidden" id="id" value="{{$product->id}}">
                        <input type="hidden" id="title2" value="{{$product->title}}">
                        <input type="hidden" id="price" value="{{$product->price}}">
                    </div>
                </div>
            </div>
            <h2>ПОХОЖИЕ ТОВАРЫ</h2>
            <div class="find-more">
                @forelse($sameProducts as $sameProduct)
                <a href="{{url('/products/'.$sameProduct->id)}}" class="find-more_item">
                    <img src="{{asset($sameProduct->image)}}">
                    <div>{{$sameProduct->title}}</div>
                    <div>{{$sameProduct->price}} p</div>
                </a>
                @empty
                    <div>Нет похожих товаров</div>
                @endforelse

            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    document.getElementById('btn').onclick=function (e){
        this.disabled = true;
        let arr = JSON.parse(localStorage.getItem('productsInBin')||'[]');

        arr.push({id: document.getElementById('id').value, title: document.getElementById('title2').value,price:document.getElementById('price').value})
        localStorage.setItem('productsInBin',JSON.stringify(arr));
        let counter = document.getElementById('main-counter');
        counter.innerText = arr.length;
    }
</script>
@endsection
