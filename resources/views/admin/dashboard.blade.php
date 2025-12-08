@extends('layouts.app')

@section('content')

    <h2 class="mb-4">Painel do Administrador</h2>

    <div class="row">

        {{-- Users --}}
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Utilizadores</h5>
                    <p class="card-text text-muted">Gestão de utilizadores, perfis e permissões.</p>

                    <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                        Ver Lista
                    </a>

                    <a href="{{ route('admin.users.create') }}" class="btn btn-success">
                        + Criar
                    </a>
                </div>
            </div>
        </div>

        {{-- Sections --}}
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Secções</h5>
                    <p class="card-text text-muted">Organização por áreas e equipas.</p>

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
                    <p class="card-text text-muted">Gestão de equipas e membros.</p>

                    <a href="{{ route('admin.teams.index') }}" class="btn btn-primary">
                        Gerir Equipas
                    </a>
                </div>
            </div>
        </div>

    </div>

@endsection
