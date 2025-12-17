<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel do Administrador
        </h2>
    </x-slot>
    <div class="container mt-4">
        <div class="row">

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5>Total Utilizadores</h5>
                        <h2>{{ $totalUsers }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5>Alojamentos</h5>
                        <h2>{{ $totalLodgings }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5>Agendamentos</h5>
                        <h2>{{ $totalSchedulings }}</h2>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Utilizadores por papel</h5>
                        <div style="max-width: 300px; margin: 0 auto;">
                            <canvas id="usersByRoleChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5>Estado dos Agendamentos</h5>
                        <div style="max-width: 500px; margin:0 auto;">
                            <canvas id="schedulingsByStateChart"></canvas>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="row">

                {{-- Users --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Utilizadores</h5>
                            <p class="card-text text-muted">
                                Gestão de utilizadores, perfis e permissões
                            </p>

                            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Ver Lista</a>
                            <a href="{{ route('admin.users.create') }}" class="btn btn-success">+ Criar</a>
                        </div>
                    </div>
                </div>

                {{-- Sections --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Secções</h5>
                            <p class="card-text text-muted">
                                Organização por áreas e equipas.
                            </p>

                            <a href="{{ route('admin.sections.index') }}" class="btn btn-primary">
                                Gerir Secções
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Teams --}}
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Equipas</h5>
                            <p class="card-text text-muted">
                                Gestão de equipas e membros.
                            </p>

                            <a href="{{ route('admin.teams.index') }}" class="btn btn-primary">
                                Gerir Equipas
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout>

<script>
    // Users by role
    new Chart(document.getElementById('usersByRoleChart'), {
        type: 'pie',
        data: {
            labels: ['Admin', 'Coordinator', 'Operational', 'Client'],
            datasets: [{
                data: [
                    {{ $admins }},
                    {{ $coordinators }},
                    {{ $operationals }},
                    {{ $clients }}
                ]
            }]
        }
    });

    // Schedulings by state
    new Chart(document.getElementById('schedulingsByStateChart'), {
        type: 'bar',
        data: {
            labels: ['Scheduled', 'In progress', 'Finished', 'Cancelled'],
            datasets: [{
                label: 'Agendamentos',
                data: [
                    {{ $scheduled }},
                    {{ $inProgress }},
                    {{ $finished }},
                    {{ $cancelled }}
                ]
            }]
        }
    });
</script>
