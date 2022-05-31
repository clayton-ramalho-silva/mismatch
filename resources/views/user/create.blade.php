@extends('layouts.principal')

@section('conteudo-principal')
    <div class="container">
        <h1>Crie sua Conta</h1>

        <form action="{{ route('user.store') }}" method="post">
            @csrf

            <div class="mb-3 mt-3">
              <label for="name" class="form-label">Username:</label>
              <input type="text" class="form-control" id="name" placeholder="Nome de usuário" name="name">
            </div>
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
            <div class="mb-3">
              <label for="pwd" class="form-label">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Criar Conta</button>
          </form>
    </div>
@endsection
