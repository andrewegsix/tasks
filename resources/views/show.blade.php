@extends('layouts.app')
@section('content')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        *{
            margin: 0;/*обнуление отступов*/
            padding: 0;/*обнуление полей*/
            box-sizing: border-box;/*метод расчета размеров бокса*/
            font-family: 'Poppins', sans-serif;/*название шрифта*/
        }
        body {
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );
            font-family: 'Poppins', sans-serif;


        }
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

        .btn-primary {

            border-radius: 50px;
            background: linear-gradient(
                to right,
                rgba(126, 64, 246, 1),
                rgba(80, 139, 252, 1)
            );
        }
    </style>
    <link rel="stylesheet" href="../css/style.css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Подробнее') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Назад<a><br>
                                <b>Название задачи: </b> {{ $todo->title }} <br>
                                <b>Описание задачи: </b> {{ $todo->description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

