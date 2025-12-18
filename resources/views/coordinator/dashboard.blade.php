<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel do Coordenador
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="row">

                {{-- Agendamentos --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Agendamentos</h5>
                            <p class="card-text text-muted">
                                Gerir e acompanhar agendamentos de limpeza.
                            </p>

                            <a href="{{ route('coordinator.agendamentos') }}"
                               class="btn btn-primary">
                                Ver Agendamentos
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Atribuições --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Atribuições</h5>
                            <p class="card-text text-muted">
                                Distribuição de tarefas pelas equipas.
                            </p>

                            <a href="{{ route('coordinator.atribuicoes') }}"
                               class="btn btn-primary">
                                Gerir Atribuições
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
                                Verificação do estado das limpezas.
                            </p>

                            <a href="{{ route('coordinator.checklist') }}"
                               class="btn btn-primary">
                                Abrir Checklist
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>

<hr class="my-4">

<div class="row">
    <div class="col-md-6">
        <h5>Agendamentos por Estado</h5>
        <div style="max-width: 300px; margin: 0 auto;">
        <canvas id="schedulingsStateChart"></canvas>
        </div>
    </div>

    <div class="col-md-6">
        <h5>Carga de Trabalho (Operacionais)</h5>
        <div style="max-width: 600px; margin: 0 auto;">
        <canvas id="workloadChart"></canvas>
    </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    new Chart(document.getElementById('schedulingsStateChart'), {
        type: 'pie',
        data: {
            labels: {!! json_encode($schedulingsByState->keys()) !!},
            datasets: [{
                data: {!! json_encode($schedulingsByState->values()) !!}
            }]
        }
    });

    new Chart(document.getElementById('workloadChart'), {
        type: 'bar',
        data: {
            labels: {!! json_encode($workloadByUser->keys()) !!},
            datasets: [{
                data: {!! json_encode($workloadByUser->values()) !!}
            }]
        }
    });
</script>

