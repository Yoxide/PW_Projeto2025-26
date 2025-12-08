<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Limpezas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand fw-bold">Gestão de Limpezas</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="{{ route('schedulings.index') }}" class="nav-link">Agendamentos</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('schedulings.create') }}" class="btn btn-warning ms-3">Pedir Limpeza</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

</body>
</html>
