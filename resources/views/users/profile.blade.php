@extends('layouts.app')

@section('content')
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <body>

    <div class="container">
        <div class="main-body">



            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://mamushki.ru/wp-content/uploads/2020/11/team_fpo-woman-1100x1100.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>

                                    <p class="text-dark mb-1">  Общее состояние: &#129320;</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">ФИО:</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Должность:</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    {{ $user->position }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Электронная почта:</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Возраст:</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    {{ $user->age }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Уровень:</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    {{ $user->grade }}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <div class="card-body">
                                    <p class="mb-4"><span class="text-primary font-italic me-1"></span> Параметры
                                    </p>
                                    <p class="mb-1" style="font-size: .77rem;">Прием пищи</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: {{ $food }}%" aria-valuenow="80"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Время входов/выходов</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 53%" aria-valuenow="72"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Коммиты</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="89"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Таски</p>
                                    <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 41%" aria-valuenow="55"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Сайты</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="66"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-6">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1"></span> Рекомендации:
                                </p>
                                <p class="mb-1" >Рекомендуется планировать свой день и время на прием пищи, выбирать более здоровые и питательные продукты, а также не забывать про регулярные перекусы. Также важно выделять достаточно времени на подготовку к работе и стараться не опаздывать, чтобы избежать стресса и спешки.</p>

                                <p class="mb-1" >   Если проблема переедания или нехватки еды связана с эмоциональными проблемами, то можно обратиться к психологу или другому специалисту, который поможет разобраться в причинах проблемы и найти ее решение.</p>

                        </div>
                    </div>
                    </div>
            </div>

        </div>
    </body>

@endsection
