<div class="space-y-6 bg-white p-6 rounded shadow">
<div>
    <label class="block text-sm">Nome</label>
    <input type="text" name="nome" value="{{ old('nome', $preinscricao->nome ?? '') }}" required class="mt-1 w-full border-gray-300 rounded-md" />
</div>

<div class="mt-4">
    <label class="block text-sm">Telefone</label>
    <input type="text" name="telefone" value="{{ old('telefone', $preinscricao->telefone ?? '') }}" required class="mt-1 w-full border-gray-300 rounded-md" />
</div>

<div class="mt-4">
    <label class="block text-sm">E-mail</label>
    <input type="email" name="email" value="{{ old('email', $preinscricao->email ?? '') }}" required class="mt-1 w-full border-gray-300 rounded-md" />
</div>

<div class="mt-4">
    <label class="block text-sm">Curso</label>
    <select name="curso_id" required class="mt-1 w-full border-gray-300 rounded-md">
        <option value="">Selecione</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" @selected(old('curso_id', $preinscricao->curso_id ?? '') == $curso->id)>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mt-4">
    <label class="block text-sm">Status</label>
    <select name="status" class="mt-1 w-full border-gray-300 rounded-md">
        <option value="1" @selected(old('status', $preinscricao->status ?? 1) == 1)>Ativo</option>
        <option value="0" @selected(old('status', $preinscricao->status ?? 1) == 0)>Inativo</option>
    </select>
</div>
</div>
