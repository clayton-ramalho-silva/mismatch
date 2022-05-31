@extends('layouts.principal')

@section('conteudo-principal')
<h2>Perfil</h2>
<hr>

<section class="p-5 m-3"style="background-color: #eee;">

<div class="row">

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">

                <img src="/img/profile/{{ $profile->picture }}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{ $profile->first_name }}</h5>
            </div>

        </div>
    </div>


    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">First Name:</p>
                </div>
                <div class="col-sm-9">
                    <p>{{$profile->first_name}}</p>
                </div>
                </div>
                <hr>

                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Last Name:</p>
                </div>
                <div class="col-sm-9">
                    <p>{{$profile->last_name}}</p>
                </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Gender:</p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{$profile->gender}}</p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Birth Date:</p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{ date('d/m/Y', strtotime($profile->birthdate)) }}</p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">City</p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{$profile->city}}</p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">State</p>
                    </div>
                    <div class="col-sm-9">
                        <p>{{$profile->state}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
