@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Agendamento</h1>

        <form method="POST" action="{{ route('schedulings.store') }}">
            @csrf

            @include('schedulings.form', ['lodgings' => $lodgings])

            <button class="btn btn-success mt-3">Criar</button>
        </form>
    </div>
@endsection
