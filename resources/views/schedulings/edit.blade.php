<div class="mb-3">
    <label class="form-label">Funcionários Operacionais</label>

    <select name="users[]" class="form-select" multiple>
        @foreach ($operationalUsers as $user)
            <option value="{{ $user->id }}"
                @selected($scheduling->users->contains($user->id))>
                {{ $user->name }} ({{ $user->email }})
            </option>
        @endforeach
    </select>

    <small class="text-muted">
        Pode selecionar vários funcionários.
    </small>
</div>
