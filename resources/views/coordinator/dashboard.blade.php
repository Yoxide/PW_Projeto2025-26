@extends('layouts.app')

@section('content')
    <h1>Dashboard do Coordenador</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body text-center">
                    <h5>Limpezas Planeadas</h5>
                    <p class="fs-3">—</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <div class="card-body text-center">
                    <h5>Em Progresso</h5>
                    <p class="fs-3">—</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body text-center">
                    <h5>Concluídas</h5>
                    <p class="fs-3">—</p>
                </div>
            </div>
        </div>
        <div class="alert alert-primary text-center">
            Limpezas este mês
            <div class="fs-3 fw-bold">12</div>
        </div>

    </div>
@endsection
