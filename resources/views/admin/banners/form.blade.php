<!-- _form.blade.php -->
<div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $banner->nome ?? old('nome') }}">
</div>
<div class="mb-3">
    <label>Imagem</label>
    <input type="file" name="imagem" class="form-control">
    @if(isset($banner))
        <img src="{{ asset('storage/' . $banner->imagem) }}" width="120" class="mt-2" />
    @endif
</div>
<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="1" {{ (isset($banner) && $banner->status) ? 'selected' : '' }}>Ativo</option>
        <option value="0" {{ (isset($banner) && !$banner->status) ? 'selected' : '' }}>Inativo</option>
    </select>
</div>
<button type="submit" class="btn" style="background-color: #045056; color: white;">
    Salvar
</button>
