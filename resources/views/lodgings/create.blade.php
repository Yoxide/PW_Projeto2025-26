<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Novo Alojamento
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('lodgings.store') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Morada</label>
                    <input name="address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Capacidade</label>
                    <input type="number" name="capacity" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo</label>
                    <select name="type" class="form-control">
                        <option value="appartment">Apartamento</option>
                        <option value="house">Casa</option>
                        <option value="room">Quarto</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button class="btn btn-success">
                    Criar
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
