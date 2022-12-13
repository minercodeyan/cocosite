@extends('main-layout')

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs">Главная - Корзина</div>
            <div class="re-bin-products">
                <div class="re-bin-products-list" id="re-bin-products-list">

                </div>
                <div class="re-bin-summary">
                    <div>
                        <div>
                            <span>Количество:</span><span id="countOfProducts"></span>
                        </div>
                        <div>
                            <span>Сумма заказа:</span><span id="sum"></span>
                        </div>
                    </div>
                    <div class="summary-buttons">
                        <a class="btn" href="{{url('/products')}}">
                            Выбрать еще
                        </a>
                        <button class="btn">
                            Оформить заказ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        let binArr = JSON.parse(localStorage.getItem('productsInBin'));

        let sumOfProducts=document.getElementById('sum');
        let countOfProducts = document.getElementById('countOfProducts');
        countOfProducts.innerText=binArr.length

        sumOfProducts.innerText=15;

        let products = document.getElementById('re-bin-products-list');

        for(let prod of binArr){
           products.innerHTML = products.innerHTML +
               '<div class="re-bin-product">' +
                  '<h3>'+prod.title+'</h3>' +
                  '<div>'+prod.price+'</div>' +
               '</div>'
        }


    </script>
@endsection


