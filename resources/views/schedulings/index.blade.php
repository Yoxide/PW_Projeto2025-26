<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agendamentos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a class="btn btn-primary mb-3" href="{{ route('schedulings.create') }}">
                Novo Agendamento
            </a>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Prioridade</th>
                    <th>Data início</th>
                    <th>Duração (dias)</th>
                    <th>Estado</th>
                    <th>Notas</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>
                @foreach($schedulings as $s)
                    <tr>
                        <td>{{ $s->priority }}</td>
                        <td>{{ $s->start_date }}</td>
                        <td>{{ $s->estimated_days }}</td>
                        <td>{{ $s->state }}</td>
                        <td>{{ $s->notes }}</td>
                        <td>
                            <a href="{{ route('schedulings.edit', $s) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('schedulings.destroy', $s) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
