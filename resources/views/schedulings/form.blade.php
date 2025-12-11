

@if($lodgings->count() == 0)
    <div class="alert alert-warning">
        Você ainda não tem alojamentos registados.
        <a href="{{ route('lodgings.create') }}" class="btn btn-sm btn-primary">Criar Alojamento</a>
    </div>
@else
    <div class="mb-3">
        <label>Alojamento</label>
        <select name="lodging_id" class="form-control" required>
            @foreach($lodgings as $l)
                <option value="{{ $l->id }}">{{ $l->name }} — {{ $l->address }}</option>
            @endforeach
        </select>
    </div>
@endif

<div class="mb-3">
    <label>Prioridade</label>
    <select name="priority" class="form-control" required>
        <option value="low">Baixa</option>
        <option value="medium">Média</option>
        <option value="high">Alta</option>
    </select>
</div>

<div class="mb-3">
    <label>Data de início</label>
    <input type="date" name="start_date" class="form-control" required
           value="{{ old('start_date', $scheduling->start_date ?? '') }}">
</div>

<div class="mb-3">
    <label>Dias estimados</label>
    <input type="number" name="estimated_days" class="form-control" required min="1"
           value="{{ old('estimated_days', $scheduling->estimated_days ?? '') }}">
</div>

<div class="mb-3"><!--  essa aprte era apenas aparecer para o admin -->
    <label>Estado</label>
    <select name="state" class="form-control" required>
        <option value="scheduled">Agendado</option>
        <option value="in progress">Em Progresso</option>
        <option value="finished">Concluído</option>
        <option value="cancelled">Cancelado</option>
    </select>
</div>

<div class="mb-3">
    <label>Notas</label>
    <input type="text" name="notes" class="form-control"
           value="{{ old('notes', $scheduling->notes ?? '') }}">
</div>
