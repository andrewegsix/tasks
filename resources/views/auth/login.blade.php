@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        /*Футер(подвал)*/
        * {

            font-family: 'Poppins', sans-serif; /*название шрифта*/
        }


    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card">
                    <img class="mb-4" src="../img/logo.png" alt="" width="112" height="112">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Логин') }}</label>
                                <div class="col-md-6">
                                    <input id="login" type="text"
                                           class="form-control @error('login') is-invalid @enderror" name="login"
                                           value="{{ old('login') }}" required autocomplete="login" autofocus>
                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Вход') }}</button>
                                </div>
                            </div>
                            <style>
                                /* Кнопка 5 */
                                .btn-primary {
                                    width: 130px;
                                    height: 40px;
                                    line-height: 42px;
                                    padding: 0;
                                    border: none;
                                    background: rgb(126, 64, 246, 1);
                                    background: linear-gradient(
                                        rgba(126, 64, 246, 1),
                                        rgba(80, 139, 252, 1));
                                }
                                .btn-primary:hover {
                                    color: #0d6efd;
                                    background: transparent;
                                    box-shadow: none;
                                }
                                .btn-primary:before,
                                .btn-primary:after {
                                    content: '';
                                    position: absolute;
                                    top: 0;
                                    right: 0;
                                    height: 2px;
                                    width: 0;
                                    background: #7e40f6;
                                    box-shadow: -1px -1px 5px 0px #fff,
                                    7px 7px 20px 0px #0003,
                                    4px 4px 5px 0px #0002;
                                    transition: 400ms ease all;
                                }
                                .btn-primary:after {
                                    right: inherit;
                                    top: inherit;
                                    left: 0;
                                    bottom: 0;
                                }
                                .btn-primary:hover:before,
                                .btn-primary:hover:after {
                                    width: 100%;
                                    transition: 800ms ease all;
                                }
                            </style>
                            <style>
                                * {
                                    padding: 0;
                                    margin: 0;
                                    box-sizing: border-box;
                                }
                                body {
                                    background: linear-gradient(
                                        to right,
                                        rgba(126, 64, 246, 1),
                                        rgba(80, 139, 252, 1)
                                    );
                                    font-family: 'Poppins', sans-serif;
                                }
                                .btn-primary {
                                    border-radius: 50px;
                                    background: linear-gradient(
                                        to right,
                                        rgba(126, 64, 246, 1),
                                        rgba(80, 139, 252, 1)
                                    );
                                }
                                h4 {
                                    font-size: 2rem !important;
                                    font-weight: 700;
                                }
                                .form-label {
                                    font-weight: 800 !important;
                                }
                                @media only screen and (max-width: 600px) {
                                    form {
                                        width: 100% !important;
                                    }
                                }
                            </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
