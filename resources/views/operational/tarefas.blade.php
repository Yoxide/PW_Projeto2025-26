@extends('layouts.app')

@section('content')
    <h1>Minhas Tarefas</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Alojamento</th>
            <th>Data</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Apta</td>
            <td>2025-01-20</td>
            <td>Em Progresso</td>
            <td>
                <a href="#" class="btn btn-sm btn-primary">Checklist</a>
            </td>
        </tr>
        </tbody>
    </table>
@endsection

