@extends('adminlte::page')

@section('content')
    <br/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div>Профиль</div>
                    </div>

                    <div class="card-body">
                        name: {{$user['name']}}<br/>
                        email: {{$user['email']}}<br/>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div>Телеграм каналы</div>
                        <div class="-right">
                            <button type="button" class="btn btn-block btn-outline-primary" data-toggle="modal"
                                    data-target="#modal-default">
                                Добавить
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        @foreach($telegrams as $telegram)
                            name: {{$telegram['name']}}<br/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('profile.telegram.create')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Добавить телеграм</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="telegramId">Telegram Id</label>
                            <input type="text" class="form-control" id="telegramId" name="telegram_id"
                                   placeholder="telegram_id">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="me" id="me">
                            <label class="form-check-label" for="me">Это мой телеграм?</label>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
