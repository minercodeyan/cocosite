@extends('main-layout')
@section('local-style')
    <style>

        .form-control {
            font-family: system-ui, sans-serif;
            font-size: 2rem;
            font-weight: bold;
            line-height: 1.1;
            display: grid;
            grid-template-columns: 1em auto;
            gap: 0.5em;
        }

        .form-control:focus-within {
            color: var(--form-control-color);
        }

        input[type=radio] {
            /* Add if not using autoprefixer */
            -webkit-appearance: none;
            /* Remove most all native input styles */
            -moz-appearance: none;
            appearance: none;
            /* For iOS < 15 */
            background-color: var(--form-background);
            /* Not removed via appearance */
            margin: 0;
            font: inherit;
            color: currentColor;
            width: 1.15em;
            height: 1.15em;
            border: 0.15em solid currentColor;
            border-radius: 50%;
            transform: translateY(-0.075em);
            display: grid;
            place-content: center;
        }

        input[type=radio]::before {
            content: "";
            width: 0.65em;
            height: 0.65em;
            border-radius: 50%;
            transform: scale(0);
            transition: 120ms transform ease-in-out;
            box-shadow: inset 1em 1em var(--form-control-color);
            /* Windows High Contrast Mode */
            background-color: CanvasText;
        }

        input[type=radio]:checked::before {
            transform: scale(1);
        }
        input[type=radio]:focus {
            outline: max(2px, 0.15em) solid currentColor;
            outline-offset: max(2px, 0.15em);
        }
        .form-inner{
            margin: 70px;
            display: flex; align-items: center;
            justify-content: space-around;
        }
    </style>
@endsection


@section('content')
    <div class="container">
    <h1 style="text-align: center; font-size: 23px; margin-bottom: 60px ">Зарегистрироваться на BigUp</h1>
    </div>
    <div class="profile">
        <div class="progress-m"><span class="current">1</span>----------2----------3</div>
        <div class="container">
            <div class="profile-inner">
                <form class="rg-form" method="post" action="{{ route('step1') }}">
                    @csrf
                    <h2 style="text-align: center; margin: 30px 0px">Выберите тип аккаунта</h2>
                    <div class="form-inner">
                        <label class="form-control">
                            <input type="radio" name="radio" />
                            <div>Личный</div>
                        </label>

                        <label class="form-control">
                            <input type="radio" name="radio" checked />
                            <div>Бизнес</div>
                        </label>
                    </div>
                    <button type="submit" style="margin: 40px 340px" class="btn-2 big-btn">ДАЛЕЕ</button>
                </form>
            </div>
        </div>
    </div>
@endsection
