
@extends('layouts.app')

@section('title', 'Criar Usuário')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Criar Novo Utilizador</h5>
        </div>

        <div class="card-body">

            <form>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Digite o nome">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="exemplo@email.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Digite uma palavra-passe">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo de Utilizador</label>
                    <select class="form-select">
                        <option value="admin">Administrador</option>
                        <option value="user">Utilizador</option>
                    </select>
                </div>

                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

        </div>
    </div>
@endsection
