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
        /*Скрытый текст*/
        .long-text {
            /* Делаем видимую границу блока и добавляем внутренний отступ */
            border: 1px solid #ffffff;
            padding: 10px;
            width: 150px;
            /* Эти опции - необходимые условия */
            overflow: hidden;
            white-space: nowrap;
            /* Добавляем троеточия в конце предложения, если текст
            не помещается в блок */
            text-overflow: ellipsis;

        }
        /*Скрытый текст*/
        .table{
            /*background-color: #ffffff;*/
            /*color: rgb(12, 0, 0);*/
        }
    </style>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <section class="vh-100 gradient-custom-2">
        <div class="container breakpoints">
            <div class="row justify-content-center">
                <div class="col-md-6">
                </div>
            </div>
            <div class="card-body ">
                @if (Session::has ('alert-success') )
                    <div class="alert alert-success" role="alert">
                        {{Session::get('alert-success')}}
                    </div>
                @endif
                @if (Session::has ('alert-info') )
                    <div class="alert alert-info" role="alert">
                        {{Session::get('alert-info')}}
                    </div>
                @endif
                @if (Session::has ('error') )
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif
                <a href="{{route('create')}}" class="btn btn-sm glow-button">Создать
                    задачу</a>
                @if (count($todos) > 0)
                    <table class="table" >
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Приоритет</th>
                            <th>Статус</th>
                            <th>Действия</th>
                            <th>Дата начала</th>
                            {{--                            <th>Дата окончания</th>--}}
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($todos as $todo)
                            <tr row>
                                <td>{{ $todo->title }}</td>
                                <td>
                                    <div class="long-text>">{{ $todo->description }}</div>
                                </td>
                                {{--                                                                                    <div class="long-text">--}}
                                {{--                                                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--                                                                                    </div>--}}
                                {{--Приоритеты дел--}}
                                <td>
                                    @if ($todo->is_completed == 1)
                                        {{--Высокий приоритет--}}
                                        <span
                                            type="submit" id="submit"
                                            class="badge btn btn-lg btn-danger text-white">Высокий приоритет</span>
                                    @elseif ($todo->is_completed == 3)
                                        {{--Низкий приоритет--}}
                                        <span
                                            type="submit" id="submit" class="badge btn  bg-success text-white">Низкий приоритет</span>
                                        {{-- Средний приоритет--}}
                                    @else ($todo->is_completed == 2)
                                        <span
                                            type="submit" id="submit" class="badge btn bg-warning text-dark">Средний приоритет</span>
                                    @endif
                                </td>
                                {{--Приоритет дел--}}
                                {{--Статус дел--}}
                                <td>
                                    @if ($todo->priority == 1)
                                        {{--Завершено--}}
                                        <a class="btn btn-sm btn-label btn-success fa fa-check"
                                           href="#"></a>
                                    @elseif ($todo->priority == 3)
                                        {{--В процессе выполнения--}}
                                        <a class="btn btn-sm btn-label btn-warning bi bi-hourglass-split text-black"
                                           href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-hourglass-split"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                            </svg>
                                        </a>
                                        {{-- Не завершено--}}
                                    @else ($todo->priority == 2)
                                        <a class="btn btn-sm btn-label btn-danger fa fa-remove"
                                           href="#"></a>
                                    @endif
                                </td>
                                {{--Статус дел--}}
                                <td>{{ $todo->created_at}}</td>
                                <td id="outer">
                                    <a class="inner btn btn-sm  btn-success"
                                       href="{{route('show', $todo->id)}}">
                                        {{--Просматривать задачи--}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                    </a>
                                    <a class="inner btn btn-sm btn-info text-white"
                                       href="{{route('edit', $todo->id)}}">
                                        {{--Редактировать--}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-pencil-square"
                                             viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd"
                                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                <td>
                                    <form method="post" action="{{ route('destroy') }}" class="inner">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                        <button type="submit" class="btn btm-sm btn-danger fa fa-trash"
                                                value=""></button>
                                    </form>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="p-10 bg-surface-secondary">
                        @else
                            <center>
                                {{--                                <img src="../img/task.png" alt="Empty" width="50" class="mt-3 content">--}}
                                <h3> Задачи ещё не созданы </h3>
                            </center>
                        @endif
                    </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </section>
@endsection
