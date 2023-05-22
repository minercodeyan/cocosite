@extends('profile')

@section('profile-content')
    <div style="margin: 30px; font-size: 24px;">
        @foreach($orders as $order)
        <div style="margin: 10px 0px; border: black solid 2px"><b>Заказ №: </b>{{$order->number}}</div>
        @endforeach
    </div>
@endsection
