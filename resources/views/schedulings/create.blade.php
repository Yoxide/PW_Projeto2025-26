<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Novo Agendamento
        </h2>
    </x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('schedulings.store') }}">
                @csrf

                @include('schedulings.form', ['lodgings' => $lodgings])

                <div class="mb-3">
                    <label class="form-label">Funcionários Operacionais</label>
                    <select name="users[]" class="form-control" multiple>
                        @foreach($operationalUsers as $user)
                            <option value="{{ $user->id }}">
                                {{ $user->name }} ({{ $user->email }})
                            </option>
                        @endforeach
                    </select>
                    <small class="text-muted">
                        Pode selecionar vários funcionários.
                    </small>
                </div>

                <button class="btn btn-success mt-3">
                    Criar
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
