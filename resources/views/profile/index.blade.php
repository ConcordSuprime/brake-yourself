@extends('adminlte::page')

@section('content')
    <br/>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Профиль</div>

                    <div class="card-body">
                        name: {{$user['name']}}<br/>
                        email: {{$user['email']}}<br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
