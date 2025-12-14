<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Limpeza de Alojamentos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- topo -->
<nav class="navbar navbar-light bg-light">
    <div class="container d-flex justify-content-between align-items-center">
        <span class="navbar-brand fw-bold">
            Gestão de Limpeza Alojamentos
        </span>

        <div class="d-flex gap-2">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-dark">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-dark">
                        Register
                    </a>
                @endif
            @endguest

            @auth
                <form method="POST" action="{{ route('logout') }}" class="mb-0">
                    @csrf

                    <button type="submit" class="btn btn-outline-dark">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>


<!-- tein -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="fw-bold mb-3">Limpeza de Alojamentos Locais</h1>

            <p class="text-muted mb-4">
                Uma plataforma simples e eficiente para solicitar,
                acompanhar e avaliar serviços de limpeza do seu alojamento.</p>

            <div class="d-flex gap-3">
                <a href="{{ route('schedulings.create') }}" class="btn btn-primary btn-lg">Pedir Limpeza</a>
                <a href="{{ route('schedulings.index') }}" class="btn btn-outline-secondary btn-lg">Consultar Estado</a>
            </div>
        </div>

        <div class="col-md-6 text-center">
            <img
                src="https://cdn-icons-png.flaticon.com/512/4334/4334893.png"
                alt="Limpeza"
                class="img-fluid"
                style="max-height: 320px;">
        </div>
    </div>
</div>

<!-- Requesitos Cliente -->
<div class="container text-center mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold">Pedido de Limpeza</h5>
                <p class="text-muted">Solicite serviços de limpeza de forma rápida e intuitiva</p>
                <small class="text-muted">RF5</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold">Acompanhamento</h5>
                <p class="text-muted">Consulte o estado e histórico das suas limpezas</p>
                <small class="text-muted">RF9</small>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5 class="fw-bold">Avaliação</h5>
                <p class="text-muted">Avalie o serviço e acompanhe indicadores simples.</p>
                <small class="text-muted">RF11</small>
            </div>
        </div>
    </div>
</div>

<!-- DASHBOARD SIMPLES -->
<div class="container mt-5">
    <h4 class="mb-3">Resumo do Cliente</h4>

    <div class="row">
        <div class="col-md-4">
            <div class="alert alert-primary text-center">Limpezas Agendadas
                <div class="fw-bold fs-4">—</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-warning text-center">Em Execução
                <div class="fw-bold fs-4">—</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="alert alert-success text-center">Concluídas
                <div class="fw-bold fs-4">—</div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="text-center mt-5 py-4 text-muted">© 2025 • Aplicação Web para Gestão de Limpeza de Alojamentos</footer>
</body>
</html>
