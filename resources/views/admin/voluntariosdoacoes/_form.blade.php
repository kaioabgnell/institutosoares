<div class="space-y-6 bg-white p-6 rounded shadow">
    <div class="mb-4">
        <label class="block text-gray-700">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $voluntariosdoaco->nome ?? '') }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Telefone</label>
        <input type="text" name="telefone" value="{{ old('telefone', $voluntariosdoaco->telefone ?? '') }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">E-mail</label>
        <input type="email" name="email" value="{{ old('email', $voluntariosdoaco->email ?? '') }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Observação</label>
        <textarea name="observacao" class="w-full border rounded px-3 py-2">{{ old('observacao', $voluntariosdoaco->observacao ?? '') }}</textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Tipo</label>
        <select name="tipo" class="w-full border rounded px-3 py-2" required>
            <option value="1" {{ old('tipo', $voluntariosdoaco->tipo ?? '') == 1 ? 'selected' : '' }}>Voluntário</option>
            <option value="2" {{ old('tipo', $voluntariosdoaco->tipo ?? '') == 2 ? 'selected' : '' }}>Doação</option>
        </select>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Status</label>
        <select name="status" class="w-full border rounded px-3 py-2" required>
            <option value="1" {{ old('status', $voluntariosdoaco->status ?? '') == 1 ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ old('status', $voluntariosdoaco->status ?? '') == 0 ? 'selected' : '' }}>Inativo</option>
        </select>
    </div>
</div>
