@extends('layouts.app')

@section('content')
    {{--    Главная страница со слайдером--}}
    <link rel="stylesheet" href="../sass/style.scss">
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    {{--    Главная страница со слайдером--}}
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        *{
            margin: 0;/*обнуление отступов*/
            padding: 0;/*обнуление полей*/
            box-sizing: border-box;/*метод расчета размеров бокса*/
            font-family: 'Poppins', sans-serif;/*название шрифта*/
        }
        body {
            display: flex;/*флексбокс сетка*/
            flex-direction: column;/*направление главной оси*/
            justify-content: flex-end;/*элементы в конце контейнера*/
            /*min-height: 100vh;*/
        }
        footer{
            position: relative;/*относительное позиционирование*/
            width: 100%;/*на всю ширину*/
            padding: 5px 5px;/*поля для контента*/
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
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
            color: #fff;/*цвет ссылок меню*/
            opacity: 0.75;/*значение прозрачности*/
            margin: 0 15px;
            text-decoration: none;/*ссылка без подчеркивания*/
            display: inline-block;
        }
        .menu li a:hover {
            opacity: 1;
        }
        footer p {
            color: #fff;
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
    <main>
        <div>
            <span>следуй</span>
            <h1>Тайм-менеджмент</h1>
            <hr>
            <p> «Более короткий способ сделать много дел — делать только одно за раз»
            </p>
            <br>
            <p>Вольфганг Амадей Моцарт </p>
            <a href="#">установить</a>
        </div>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/slide1.jpg" class="d-block w-75" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/scott-graham-5fNmWej4tAA-unsplash.jpg" class="d-block w-75" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/slide3.jpg" class="d-block w-75" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Следующий</span>
            </button>
        </div>

    </main>

@endsection


