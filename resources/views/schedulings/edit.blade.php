<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Agendamento
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('schedulings.update', $scheduling) }}">
                    @csrf
                    @method('PUT')

                    {{-- Priority --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Prioridade
                        </label>

                        <select name="priority" class="form-select w-full" required>
                            @foreach (['low' => 'Baixa', 'medium' => 'Média', 'high' => 'Alta'] as $value => $label)
                                <option value="{{ $value }}"
                                    @selected($scheduling->priority === $value)>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Start date --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Data de início
                        </label>

                        <input type="date"
                               name="start_date"
                               class="form-input w-full"
                               value="{{ $scheduling->start_date }}"
                               required>
                    </div>

                    {{-- Estimated days --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Duração estimada (dias)
                        </label>

                        <input type="number"
                               name="estimated_days"
                               min="1"
                               class="form-input w-full"
                               value="{{ $scheduling->estimated_days }}"
                               required>
                    </div>

                    {{-- State --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Estado
                        </label>

                        <select name="state" class="form-select w-full" required>
                            @foreach ([
                                'scheduled' => 'Agendado',
                                'in_progress' => 'Em progresso',
                                'finished' => 'Concluído',
                                'cancelled' => 'Cancelado'
                            ] as $value => $label)
                                <option value="{{ $value }}"
                                    @selected($scheduling->state === $value)>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Notes --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Notas
                        </label>

                        <textarea name="notes"
                                  rows="3"
                                  class="form-textarea w-full">{{ $scheduling->notes }}</textarea>
                    </div>

                    {{-- Operational users --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Funcionários Operacionais
                        </label>

                        <select name="users[]" class="form-select w-full" multiple>
                            @foreach ($operationalUsers as $user)
                                <option value="{{ $user->id }}"
                                    @selected($scheduling->users->contains($user->id))>
                                    {{ $user->name }} ({{ $user->email }})
                                </option>
                            @endforeach
                        </select>

                        <p class="text-sm text-gray-500 mt-1">
                            Pode selecionar vários funcionários.
                        </p>
                    </div>

                    {{-- Buttons --}}
                    <div class="flex items-center justify-end mt-6">
                        <a href="{{ route('schedulings.index') }}"
                           class="text-gray-600 hover:text-gray-900 mr-4">
                            Cancelar
                        </a>

                        <button class="btn btn-success">
                            Guardar Alterações
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>


