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
                        <th style="width: 160px;">Ações</th>
                    </tr>
                    </thead>

                    <tbody>
                    @forelse($schedulings as $s)
                        <tr>
                            <td>{{ ucfirst($s->priority) }}</td>
                            <td>{{ \Carbon\Carbon::parse($s->start_date)->format('d/m/Y') }}</td>
                            <td>{{ $s->estimated_days }}</td>
                            <td>{{ ucfirst(str_replace('_', ' ', $s->state)) }}</td>
                            <td>{{ $s->lodging->name ?? '—' }}</td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('schedulings.edit', $s) }}"
                                   class="btn btn-sm btn-warning">
                                    Editar
                                </a>

                                @if(auth()->check() && auth()->user()->role === 'admin')
                                    <form action="{{ route('schedulings.destroy', $s) }}"
                                          method="POST"
                                          onsubmit="return confirm('Tem a certeza que deseja eliminar este agendamento?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Apagar
                                        </button>
                                    </form>
                                @endif
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

