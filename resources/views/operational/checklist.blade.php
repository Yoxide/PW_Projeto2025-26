@extends('layouts.app')

@section('content')
    <h1>Executar Checklist</h1>

    <form>
        <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Limpar cozinha</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Limpar WC</label>
        </div>

        <button class="btn btn-success mt-3">Concluir Tarefa</button>
    </form>
@endsection

