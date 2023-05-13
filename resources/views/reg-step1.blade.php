@extends('main-layout')

@section('content')
    <div class="container">
    <h1 style="text-align: center; font-size: 23px; margin-bottom: 60px ">Зарегистрироваться на BigUp</h1>
    </div>
    <div class="profile">
        <div class="progress-m"><span class="current">1</span>----------2----------3</div>
        <div class="container">
            <div class="profile-inner">
                <form method="post" action="{{ route('step1') }}">
                    @csrf
                    <button class="btn-2 big-btn">ДАЛЕЕ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
