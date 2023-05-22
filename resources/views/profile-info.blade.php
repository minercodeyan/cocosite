@extends('profile')

@section('profile-content')
    <div style="margin: 30px; font-size: 24px;">
        @if($userData)
        <div style="margin: 10px 0px"><b>Имя: </b>{{$userData->first_name}}</div>
        <div style="margin: 10px 0px"><b>Телефон: </b>{{$userData->phone_number}}</div>
        <div style="margin: 10px 0px"><b>Дата рождения: </b>{{$userData->birth_date}}</div>
        <div style="margin: 10px 0px"><b>Категория: </b>{{\App\Models\UserInfo::SELECT[$userData->category]}}</div>
        @endif
    </div>
@endsection
