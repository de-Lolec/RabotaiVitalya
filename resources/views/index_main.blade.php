@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="table-responsive bg-white shadow-sm">
                    <table class="table ">
                        <thead class="thead-light">
                        <tr class="text-success ">
                            <th class="text-center">#</th>
                            <th class="text-center">ФИО</th>
                            <th class="text-center">Должность</th>
                            <th class="text-center">Выгорание</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($paginator as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center" >{{ $user->name }}</td>
                            <td class="text-center">{{ $user->position }}</td>
                            <td class="text-center">{{ $user->local }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="flex-shrink-0 p-3 bg-white shadow-sm" style="width: 280px;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                    <svg class="bi me-2" width="4" height="7"><use xlink:href="#bootstrap"></use></svg>

                </a>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Разработчик
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Dev-ops
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                            Product-manager
                        </label>
                    </div>


                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                            Инженер по тестированию
                        </label>
                    </div>
                <hr>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Выгорание
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck2">
                        На грани
                    </label>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                       Все в порядке
                    </label>

                </div>



                <div class="d-flex justify-content-center flex-row bd-highlight mb-3">
                    <div class="p-3 bd-highlight"><button type="button" class="btn btn-success">Показать</button></div>

                </div>

            </div>
            </div>
        @if($paginator->total() > $paginator->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $paginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>

    </div>
@endsection
