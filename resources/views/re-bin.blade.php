@extends('main-layout')

@section('content')

    <div class="preview">
        <div class="container">
            <div class="breadcumbs">Главная - Корзина</div>
            <input type="hidden" id="is_order" value="{{Session::get('order')}}">
            <div class="re-bin-products">
                <div class="re-bin-products-list" id="re-bin-products-list">

                </div>
                <div class="re-bin-summary">
                    <div class="summ">
                        <div>
                            <span>Количество:</span><b id="countOfProducts"></b>
                        </div>
                        <div>
                            <span>Сумма заказа:</span><b id="sum"></b>
                        </div>
                    </div>
                    <div class="summary-buttons">
                        <a class="btn little_btn" href="{{url('/catalog')}}">
                            Выбрать еще
                        </a>
                        <form method="post" action="/order">
                            @csrf
                            <input type="hidden" id="make_order" name="order">
                            <button id="make_order" style="background: white;font-size: 20px" class="btn little_btn" >
                                Оформить заказ
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        let is_order = document.getElementById('is_order');

        if(is_order.value){
            localStorage.setItem('productsInBin','[]');
        }

        let binArr = JSON.parse(localStorage.getItem('productsInBin'));

        document.getElementById('make_order').value=localStorage.getItem('productsInBin')



        let sumOfProducts = document.getElementById('sum');
        let countOfProducts = document.getElementById('countOfProducts');
        countOfProducts.innerText = binArr.length

        sumOfProducts.innerText = 0;

        for (let i = 0; i < binArr.length; i++) {
            sumOfProducts.innerText = parseInt(sumOfProducts.innerText) + parseInt(binArr[i].price)
        }

        let products = document.getElementById('re-bin-products-list');

        for (let prod of binArr) {
            products.innerHTML = products.innerHTML +
                '<div class="re-bin-product">' +
                '<div class="main">' +
                '<a href="{{url('/')}}"><h3>' + prod.title + '</h3></a>' +
                '<img class="trash" src="{{asset('/img/pngfind 1.png')}}"/>' +
                '</div>' +
                '<div class="in-me">' +
                '<span class="minis" name="minis">-</span><span class="num">' + 1 + '</span><span name="plus" class="plus">+</span><span>x</span><span>' + prod.price + ' руб</span>' +
                '</div>' +
                ' </div>'
        }
        let munisArr = document.getElementsByName('minis');


        let i = 0
        munisArr.forEach(e =>
            e.onclick = function () {
                if (parseInt(countOfProducts.innerText) > 0) {
                    countOfProducts.innerText = parseInt(countOfProducts.innerText) - 1
                    sumOfProducts.innerText = parseInt(sumOfProducts.innerText) - parseInt(binArr[i].price)
                }

            }
        )
        let plusArr = document.getElementsByName('plus');

        let j = 0;
        plusArr.forEach(e =>
            e.onclick = function () {
                countOfProducts.innerText = parseInt(countOfProducts.innerText) + 1
                sumOfProducts.innerText = parseInt(sumOfProducts.innerText) + parseInt(binArr[j].price)

            }
        )


    </script>
@endsection


