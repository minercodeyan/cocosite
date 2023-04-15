@extends('main-layout')

@section('content')
    <div class="profile">
        <div class="container">
            <div class="profile-inner">
               @include('components.profile-aside')
                <section>
                    @yield('profile-content')
                </section>
            </div>
        </div>
    </div>
@endsection
