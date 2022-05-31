@extends('layouts.principal')

@section('conteudo-principal')

<h2>Complete seu Perfil</h2>

<section class="p-5 m-3"style="background-color: #eee;">
<form action="{{ route('profiles.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="row">

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">Usuário: {{ $user->name }}</h5>
                <p class="text-muted mb-4">Trocar imagem</p>
                <div class="d-flex justify-content-center mb-2">
                    <input type="file" id="picture" name="picture" class="form-control-file">
                </div>
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
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                </div>
                <hr>

                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Last Name:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <label for="browser" class="form-label">Gender:</label>
                        <input class="form-control" list="browsers" name="gender" id="gender">
                        <datalist id="browsers">
                            <option value="Masculino">
                            <option value="Feminino">
                        </datalist>
                    </div>
                    <div class="col-sm-9">
                        <label for="date">Birth date:</label>
                        <input type="date" name="birthdate" id="birthdate" class="form-control">
                    </div>
                    </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">City</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="city" id="city" class="form-control">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">State</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="state" id="state" class="form-control">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Cadastrar perfil</button>
</form>

</section>
@endsection
