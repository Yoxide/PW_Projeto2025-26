
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Agendamento</h1>

        <form method="POST" action="{{ route('schedulings.update', $scheduling) }}">
            @csrf
            @method('PUT')

            @include('schedulings.form', [
                'lodgings' => $lodgings,
                'scheduling' => $scheduling
            ])

            <button class="btn btn-primary mt-3">Atualizar</button>
        </form>
    </div>
@endsection
