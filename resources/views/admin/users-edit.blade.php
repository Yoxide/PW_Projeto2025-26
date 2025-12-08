
@extends('layouts.app')

@section('title', 'Editar Utilizador')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Editar Utilizador</h5>
        </div>

        <div class="card-body">

            <form>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" value="João Silva">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="joao@example.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo de Utilizador</label>
                    <select class="form-select">
                        <option value="admin">Administrador</option>
                        <option value="user" selected>Utilizador</option>
                    </select>
                </div>

                <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Cancelar</a>
                <button class="btn btn-warning">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
