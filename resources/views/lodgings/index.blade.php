<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Alojamentos
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <a href="{{ route('lodgings.create') }}"
               class="btn btn-primary mb-3">
                Novo Alojamento
            </a>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Morada</th>
                    <th>Capacidade</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                </tr>
                </thead>

                <tbody>
                @foreach($lodgings as $lodging)
                    <tr>
                        <td>{{ $lodging->name }}</td>
                        <td>{{ $lodging->address }}</td>
                        <td>{{ $lodging->capacity }}</td>
                        <td>{{ $lodging->type }}</td>
                        <td>
                            <a href="{{ route('lodgings.edit', $lodging) }}"
                               class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('lodgings.destroy', $lodging) }}"
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

