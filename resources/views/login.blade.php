
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="mb-4">Login</h2>
    <form>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control">
        </div>
        <button class="btn btn-primary" disabled>Entrar</button>
    </form>
    <p class="text-muted mt-3">
</p>
    <a href="{{ route('home') }}" class="btn btn-link mt-3">← Voltar à página inicial</a>
</div>
<!-- Acesso por perfil enquanto nao tiver login -->
<h5 class="text-center mb-3">Entrar como</h5>

<div class="d-grid gap-2">
    <a href="{{ route('admin.dashboard') }}" class="btn btn-dark">Administrador</a>

    <a href="{{ route('coordinator.dashboard') }}" class="btn btn-primary">Coordenador</a>

    <a href="{{ route('operational.dashboard') }}" class="btn btn-success">Operacional</a>
</div>

<div class="text-center mt-4">
    <a href="{{ route('home') }}" class="btn btn-link">← Voltar à página inicial</a>
</div>
</body>
</html>
