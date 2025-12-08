@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2>Lista de Agendamentos</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('schedulings.create') }}" class="btn btn-success mb-3">Novo Agendamento</a>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Prioridade</th>
                <th>Data Início</th>
                <th>Dias Estimados</th>
                <th>Estado</th>
                <th>Notas</th>
            </tr>
            </thead>

            <tbody>
            @foreach($schedulings as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->priority }}</td>
                    <td>{{ $s->start_date }}</td>
                    <td>{{ $s->estimated_days }}</td>
                    <td>{{ $s->state }}</td>
                    <td>{{ $s->notes }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
