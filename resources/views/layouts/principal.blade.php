<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mismatch</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="col">
                    <a class="navbar-brand" href="/">Mismatch</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse col" id="mynavbar">
                    <ul class="navbar-nav me-auto d-flex flex-row justify-content-end">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profiles.show', $user->id) }}"><i class="fas fa-user"></i> View Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profiles.edit', $user->id) }}"><i class="fas fa-user-edit"></i> Edit Profile</a>
                            </li>
                        @endauth

                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.create') }}"><i class="fas fa-user-plus"></i> Criar Conta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.login') }}"> Login</a>
                            </li>
                        @endguest

                        @auth
                            <form action="{{ route('logout') }}" method="post">
                                @csrf

                                <button type="submit" class="btn btn-primary">Sair</button>
                            </form>
                        @endauth
                    </ul>
                </div>

            </div>
        </nav>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('conteudo-principal')
            </div>
        </div>
    </main>

</body>
</html>
