@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Cursos</h2>
            <a href="{{ route('cursos.create') }}" class="bg-[#b0b002] hover:bg-yellow-600 text-white px-4 py-2 rounded">Adicionar</a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <table class="min-w-full divide-y divide-gray-200 bg-white shadow rounded">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagem</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($cursos as $curso)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $curso->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $curso->nome }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($curso->status)
                            <span class="text-green-600 font-semibold">Ativo</span>
                        @else
                            <span class="text-red-600 font-semibold">Inativo</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($curso->imagem)
                            <img src="{{ asset('storage/' . $curso->imagem) }}" alt="Imagem" class="h-10 rounded">
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if($curso->url)
                            <a href="{{ url('curso/' . $curso->url) }}" target="_blank" class="text-blue-600 hover:underline">Link</a>
                        @else
                            -
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                        <a href="{{ route('cursos.edit', $curso) }}" class="text-blue-600 hover:underline">Editar</a>
                        <form action="{{ route('cursos.destroy', $curso) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
