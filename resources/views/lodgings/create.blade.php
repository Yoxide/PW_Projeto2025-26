
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Alojamento</h1>

        <form method="POST" action="{{ route('lodgings.store') }}">
            @csrf

            <div class="mb-3">
                <label>Nome</label>
                <input name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Morada</label>
                <input name="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Capacidade</label>
                <input type="number" name="capacity" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tipo</label>
                <select name="type" class="form-control">
                    <option value="appartment">Apartamento</option>
                    <option value="house">Casa</option>
                    <option value="room">Quarto</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Descrição</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <button class="btn btn-success">Criar</button>
        </form>
    </div>
@endsection
