@extends('layouts.app')

@section('content')
    <h1>Atribuir Operacionais</h1>

    <form>
        <div class="mb-3">
            <label>Agendamento</label>
            <select class="form-control">
                <option>Limpeza Apta</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Operacionais</label>
            <select class="form-control" multiple>
                <option>Maria</option>
                <option>João</option>
                <option>Ana</option>
            </select>
        </div>

        <button class="btn btn-success">Guardar Atribuição</button>
    </form>
@endsection

