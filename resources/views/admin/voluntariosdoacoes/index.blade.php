@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Voluntários e Doações</h2>
            <a href="{{ route('voluntariosdoacoes.create') }}" class="bg-[#b0b002] hover:bg-yellow-600 text-white px-4 py-2 rounded">Adicionar</a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif

        <table class="min-w-full divide-y divide-gray-200 bg-white shadow rounded">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3">Nome</th>
                    <th class="px-6 py-3">Tipo</th>
                    <th class="px-6 py-3">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($registros as $registro)
                <tr>
                    <td class="px-6 py-4">{{ $registro->id }}</td>
                    <td class="px-6 py-4">{{ $registro->nome }}</td>
                    <td class="px-6 py-4">
                        @if($registro->tipo == 1)
                            <span class="font-semibold">Voluntário</span>
                        @elseif($registro->tipo == 1)
                            <span class="font-semibold">Doação</span>
                        @else
                            <span class="font-semibold">Contatos</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 flex gap-2">
                        <a href="{{ route('voluntariosdoacoes.edit', $registro) }}" class="text-blue-600 hover:underline">Editar</a>
                        <form action="{{ route('voluntariosdoacoes.destroy', $registro) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
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
