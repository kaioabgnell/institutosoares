@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Banners</h2>
            <a href="{{ route('banners.create') }}" class="bg-[#045056] hover:bg-[#034049] text-white px-4 py-2 rounded">
                Adicionar
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imagem</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($banners as $banner)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $banner->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $banner->nome }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ asset('storage/' . $banner->imagem) }}" alt="Banner" class="h-10">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($banner->status)
                                    <span class="text-green-600 font-semibold">Ativo</span>
                                @else
                                    <span class="text-red-600 font-semibold">Inativo</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap flex gap-2">
                                <a href="{{ route('banners.edit', $banner) }}" class="text-blue-600 hover:underline">Editar</a>
                                <form action="{{ route('banners.destroy', $banner) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
