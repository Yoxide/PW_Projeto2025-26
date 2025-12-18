<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Agendamentos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('schedulings.create') }}"
               class="btn btn-primary mb-4">
                Novo Agendamento
            </a>

            @if(session('success'))
                <div class="alert alert-success mb-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded p-4">
                <table class="table table-bordered mb-0">
                    <thead>
                    <tr>
                        <th>Prioridade</th>
                        <th>Data início</th>
                        <th>Duração</th>
                        <th>Estado</th>
                        <th>Alojamento</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($schedulings as $s)
                        <tr>
                            <td>{{ $s->priority }}</td>
                            <td>{{ $s->start_date }}</td>
                            <td>{{ $s->estimated_days }}</td>
                            <td>{{ $s->state }}</td>
                            <td>{{ $s->lodging->name ?? '—' }}</td>
                            <td>
                                <a href="{{ route('schedulings.edit', $s) }}"
                                   class="btn btn-sm btn-warning">
                                    Editar
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">
                                Nenhum agendamento registado.
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
