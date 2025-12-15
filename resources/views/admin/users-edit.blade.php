<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Utilizador</h2>
    </x-slot>

    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block">Nome</label>
            <input class="form-input w-full" value="{{ $user->name }}" disabled>
        </div>

        <div class="mb-4">
            <label class="block">Role</label>
            <select name="role" class="form-select w-full">
                @foreach (['admin','coordinator','operational','client'] as $role)
                    <option value="{{ $role }}" {{ $user->role === $role ? 'selected' : '' }}>
                        {{ ucfirst($role) }}
                    </option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Guardar</button>
    </form>
</x-app-layout>
