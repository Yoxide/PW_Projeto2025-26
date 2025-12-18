<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Alojamento
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('lodgings.update', $lodging) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="name" class="form-control"
                       value="{{ old('name', $lodging->name) }}" required>
            </div>

            <div class="mb-3">
                <label>Morada</label>
                <input type="text" name="address" class="form-control"
                       value="{{ old('address', $lodging->address) }}" required>
            </div>

            <div class="mb-3">
                <label>Capacidade</label>
                <input type="number" name="capacity" class="form-control"
                       value="{{ old('capacity', $lodging->capacity) }}" required>
            </div>

            <div class="mb-3">
                <label>Tipo</label>
                <input type="text" name="type" class="form-control"
                       value="{{ old('type', $lodging->type) }}" required>
            </div>

            <div class="mb-3">
                <label>Proprietário</label>
                <select name="lodging_owner_id" class="form-control" required>
                    @foreach($owners as $owner)
                        <option value="{{ $owner->id }}"
                            {{ $lodging->lodging_owner_id == $owner->id ? 'selected' : '' }}>
                            {{ $owner->lodging_owner_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-primary">Atualizar</button>
            <a href="{{ route('lodgings.index') }}" class="btn btn-secondary">
                Cancelar
            </a>
        </form>
    </div>
</x-app-layout>

