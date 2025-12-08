
@extends('layouts.app')

@section('title', 'Utilizadores')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h3>Utilizadores</h3>
        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Novo Utilizador</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <!-- Conteúdo só visual exemplo -->
                <tr>
                    <td>1</td>
                    <td>João Silva</td>
                    <td>joao@example.com</td>
                    <td>
                        <a href="{{ route('admin.users.edit', 1) }}" class="btn btn-sm btn-warning">Editar</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
