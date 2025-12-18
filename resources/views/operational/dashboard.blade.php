<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Painel Operacional
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Stat card --}}
            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Total de tarefas atribuídas</h5>
                        <h2>{{ $total }}</h2>
                    </div>
                </div>
            </div>

            {{-- Chart --}}
            <div class="card">
                <div class="card-body">
                    <div style="max-width: 300px; margin: 0 auto;">
                    <canvas id="tasksChart"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        new Chart(document.getElementById('tasksChart'), {
            type: 'pie',
            data: {
                labels: {!! json_encode($byState->keys()) !!},
                datasets: [{
                    data: {!! json_encode($byState->values()) !!}
                }]
            }
        });
    </script>
</x-app-layout>




