<div class="space-y-6 bg-white p-6 rounded shadow">

    <div>
        <label class="block text-sm font-medium text-gray-700">Nome</label>
        <input type="text" name="nome" value="{{ old('nome', $curso->nome ?? '') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Descrição</label>
        <textarea name="descricao" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('descricao', $curso->descricao ?? '') }}</textarea>
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Imagem</label>
        <input type="file" name="imagem" accept="image/*" class="mt-1 block w-full">
        @if(isset($curso) && $curso->imagem)
            <img src="{{ asset('storage/' . $curso->imagem) }}" alt="Imagem atual" class="h-24 mt-2 rounded">
        @endif
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-700">Status</label>
        <select name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            <option value="1" {{ (old('status', $curso->status ?? 1) == 1) ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ (old('status', $curso->status ?? 1) == 0) ? 'selected' : '' }}>Inativo</option>
        </select>
    </div>
</div>
 