@extends('layouts.principal')

@section('conteudo-principal')

<h2>Editar seu Perfil</h2>

<section class="p-5 m-3"style="background-color: #eee;">
<form action="{{ route('profiles.update', $profile->id) }}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="row">

    <div class="col-lg-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <img src="/img/profile/{{ $profile->picture }}" alt="avatar"
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

                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">First Name:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $profile->first_name}}">
                </div>
                </div>
                <hr>

                <div class="row">
                <div class="col-sm-3">
                    <p class="mb-0">Last Name:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $profile->last_name}}">
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
                        <input type="text" name="city" id="city" class="form-control" value="{{ $profile->city}}">
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">State</p>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="state" id="state" class="form-control" value="{{ $profile->state}}">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Salvar Mudanças</button>
</form>

</section>
@endsection
