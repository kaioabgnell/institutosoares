@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Criar Banner</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="nome" value="{{ old('nome') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Imagem</label>
                <input type="file" name="imagem" accept="image/*" class="mt-1 block w-full" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Status</label>
                <select name="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('banners.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
                <button type="submit" class="bg-[#045056] hover:bg-[#034049] text-white px-4 py-2 rounded">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
