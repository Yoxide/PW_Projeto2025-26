@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h2>Novo Agendamento</h2>

        <form action="{{ route('schedulings.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="priority" class="form-label">Prioridade</label>
                <select name="priority" class="form-select" required>
                    <option value="low">Baixa</option>
                    <option value="medium">Média</option>
                    <option value="high">Alta</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="start_date" class="form-label">Data de Início</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="estimated_days" class="form-label">Duração Estimada (dias)</label>
                <input type="number" name="estimated_days" min="1" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notas</label>
                <textarea name="notes" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Criar Agendamento</button>
        </form>

    </div>
@endsection
