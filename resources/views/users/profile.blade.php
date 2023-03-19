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
                                <img src="https://www.blast.hk/attachments/64805/" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    <p class="text-secondary mb-1"></p>
                                    <p class="text-muted font-size-sm">Таганрог - столица репа</p>
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
                                    <h6 class="mb-0">Имя</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->name }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Должность</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->position }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Электронная почта</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->email }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Возраст</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->age }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Уровень</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $user->grade }}
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>





                </div>
            </div>

        </div>
    </body>

@endsection
