@if ($message = Session::get('success'))
    <div class="alert a-success">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Успех!</strong> {{ $message }}
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert a-danger">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Ошибка!</strong> {{ $message }}
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert a-warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Опастность!</strong> {{ $message }}
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Danger!</strong> {{ $message }}
    </div>
@endif
