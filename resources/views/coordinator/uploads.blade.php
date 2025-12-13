@extends('layouts.app')

@section('content')
    <h1>Evidências de Execução</h1>

    <form>
        <div class="mb-3">
            <label>Upload de ficheiro</label>
            <input type="file" class="form-control">
        </div>

        <button class="btn btn-primary">Submeter</button>
    </form>
@endsection

