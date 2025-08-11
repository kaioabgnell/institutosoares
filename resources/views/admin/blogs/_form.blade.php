<div class="space-y-6 bg-white p-6 rounded shadow">
<div>
    <label class="block text-sm font-medium text-gray-700">Título</label>
    <input type="text" name="titulo" value="{{ old('titulo', $blog->titulo ?? '') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
</div>

<div class="mt-4">
    <label class="block text-sm font-medium text-gray-700">Descrição</label>
    <textarea name="descricao" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('descricao', $blog->descricao ?? '') }}</textarea>
</div>

<div class="mt-4">
    <label class="block text-sm font-medium text-gray-700">Imagem</label>
    <input type="file" name="imagem" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
    @if(!empty($blog?->imagem))
        <img src="{{ asset('storage/' . $blog->imagem) }}" class="mt-2 h-24 rounded" alt="Imagem atual">
    @endif
</div>

<div class="mt-4">
    <label class="block text-sm font-medium text-gray-700">Status</label>
    <select name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <option value="1" @selected(old('status', $blog->status ?? 1) == 1)>Ativo</option>
        <option value="0" @selected(old('status', $blog->status ?? 1) == 0)>Inativo</option>
    </select>
</div>
</div>
