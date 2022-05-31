@extends('layouts.dashboard')

@section('conteudo-principal')
<div class="container-fluid">
    <div class="row">

    @include('layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>

        <h2>Perfil</h2>
        <hr>

        <section class="p-5 m-3"style="background-color: #eee;">

        <div class="row">

            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="/img/profile/{{ $user->profile->picture }}" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{ $user->name }}</h5>
                    </div>
                    <div class="card-footer">
                        @if ($user->active == 0)
                            <p>Status: Desativado</p>
                            <form action="{{route('admin.admin.update', $user->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" name="active" id="status" value="1"> Ativar?
                                <button type="submit" class="btn btn-primary">Ativar</button>
                            </form>
                        @else
                            <p>Status: Ativado</p>
                            <form action="{{route('admin.admin.update', $user->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" name="active" id="status" value="0"> Desativar?
                                <button type="submit" class="btn btn-primary">Desativar</button>
                            </form>

                        @endif
                        <hr>
                        <p>Conta: Ativa</p>
                            <form action="{{route('admin.admin.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir conta Permanentemente?</button>
                            </form>
                    </div>

                </div>
            </div>


            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">First Name:</p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{$user->profile->first_name}}</p>
                        </div>
                        </div>
                        <hr>

                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Last Name:</p>
                        </div>
                        <div class="col-sm-9">
                            <p>{{$user->profile->last_name}}</p>
                        </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Gender:</p>
                            </div>
                            <div class="col-sm-9">
                                <p>{{$user->profile->gender}}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Birth Date:</p>
                            </div>
                            <div class="col-sm-9">
                                <p>{{ date('d/m/Y', strtotime($user->profile->birthdate)) }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">City</p>
                            </div>
                            <div class="col-sm-9">
                                <p>{{$user->profile->city}}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">State</p>
                            </div>
                            <div class="col-sm-9">
                                <p>{{$user->profile->state}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </main>



@endsection
