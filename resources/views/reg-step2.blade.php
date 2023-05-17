@extends('main-layout')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="progress-m"><img src="{{asset('img/icon60/done-tick.png')}}" width="30">----------<span class="current">2</span>----------3</div>
            <div class="profile-inner">
               <form class="rg-form" method="post" action="{{ route('step2') }}">
                   @csrf
                   <input style="margin: 20px 60px" name="firstname" type="text" placeholder="Имя" required>
                   <input style="margin: 20px 60px" name="phone" type="tel" placeholder="Номер телефона" required>
                   <h3 style="margin: 0px 60px">Дата рождения</h3>
                   <input style="margin: 20px 60px" name="date_of_b" type="date" placeholder="Дата рождения" required>
                   <h3 style="margin: 0px 60px">Выберете категорию</h3>
                   <select style="font-size: 20px; padding: 10px 0px;border-radius: 5px; border: grey 1px solid; margin: 20px 60px" name="select">
                       <!--Supplement an id here instead of using 'name'-->
                       @foreach(\App\Models\UserInfo::SELECT as $key=>$value)
                       <option value="{{$key}}">{{$value}}</option>
                       @endforeach
                   </select>
                   <button type="submit" style="margin: 40px 340px" class="btn-2 big-btn">ДАЛЕЕ</button>
               </form>
            </div>
        </div>
    </div>
@endsection
