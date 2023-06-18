@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        body {
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );
            font-family: 'Poppins', sans-serif;

        }
        *{
            margin: 0;/*обнуление отступов*/
            padding: 0;/*обнуление полей*/
            box-sizing: border-box;/*метод расчета размеров бокса*/
            font-family: 'Poppins', sans-serif;/*название шрифта*/
        }
        footer{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;/*на всю ширину*/
            padding: 5px 5px;/*поля для контента*/
            background: #ffffff;
        );/*цвет футера*/
            display: flex;
            justify-content: center;/*в центре по горизонтали*/
            align-items: center;/*в центре по вертикали*/
            flex-direction: column;
            margin-top: 5px;/*отступ сверху*/
        }
        .menu{
            position: relative;
            display: flex;
            justify-content: right;
            align-items: center;
            margin: 5px 0;
            flex-wrap: wrap;/*разрешен перенос на новую строку*/
        }
        .menu li{
            list-style: none;/*удалить черные маркеры*/
        }
        .menu li a {
            font-size: 14px;/*размер ссылок меню*/
            color: #000000FF;/*цвет ссылок меню*/
            opacity: 0.75;/*значение прозрачности*/
            margin: 0 15px;
            text-decoration: none;/*ссылка без подчеркивания*/
            display: inline-block;
        }
        .menu li a:hover {
            opacity: 1;
        }
        footer p {
            color: #000000FF;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Вы вошли в систему, {{Auth::user()->login}} !
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
