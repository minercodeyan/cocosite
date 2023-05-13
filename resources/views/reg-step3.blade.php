@extends('main-layout')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="progress-m"><img src="{{asset('img/icon60/done-tick.png')}}" width="30">----------<img src="{{asset('img/icon60/done-tick.png')}}" width="30">----------<span class="current">3</span></div>
            <div class="profile-inner">
                <form method="post" action="{{ route('step3') }}">
                    @csrf
                    <button class="btn-2 big-btn">ДАЛЕЕ</button>
                </form>
            </div>
        </div>
    </div>
@endsection

