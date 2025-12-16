<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel Operacional
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="row">

                {{-- Tarefas --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Tarefas</h5>
                            <p class="card-text text-muted">
                                Lista de tarefas atribuídas.
                            </p>

                            <a href="{{ route('operational.tarefas') }}"
                               class="btn btn-primary">
                                Ver Tarefas
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Checklist --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Checklist</h5>
                            <p class="card-text text-muted">
                                Registo e confirmação de tarefas concluídas.
                            </p>

                            <a href="{{ route('operational.checklist') }}"
                               class="btn btn-primary">
                                Abrir Checklist
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Uploads --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Uploads</h5>
                            <p class="card-text text-muted">
                                Envio de comprovativos e imagens.
                            </p>

                            <a href="{{ route('operational.uploads') }}"
                               class="btn btn-primary">
                                Gerir Uploads
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>



