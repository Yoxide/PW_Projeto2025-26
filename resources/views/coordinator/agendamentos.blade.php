@extends('layouts.app')

@section('content')
    <h1>Agendamentos da Secção</h1>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Alojamento</th>
            <th>Data</th>
            <th>Prioridade</th>
            <th>Estado</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Apta</td>
            <td>2025-01-20</td>
            <td>Alta</td>
            <td>Agendado</td>
            <td>
                <a href="#" class="btn btn-sm btn-primary">Atribuir Equipa</a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection

