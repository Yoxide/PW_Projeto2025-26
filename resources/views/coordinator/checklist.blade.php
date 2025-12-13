@extends('layouts.app')

@section('content')
    <h1>Checklist da Limpeza</h1>

    <ul class="list-group">
        <li class="list-group-item">
            <input type="checkbox"> Limpar cozinha
        </li>
        <li class="list-group-item">
            <input type="checkbox"> Limpar WC
        </li>
        <li class="list-group-item">
            <input type="checkbox"> Trocar roupa de cama
        </li>
    </ul>
@endsection

