@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-between mb-4">
            <h2 class="text-2xl font-bold text-gray-800">Blog</h2>
            <a href="{{ route('blogs.create') }}" class="bg-[#b0b002] hover:bg-yellow-600 text-white px-4 py-2 rounded">Adicionar</a>
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
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($blogs as $blog)
                    <tr>
                        <td class="px-6 py-4">{{ $blog->id }}</td>
                        <td class="px-6 py-4">{{ $blog->titulo }}</td>
                        <td class="px-6 py-4">
                            {{ $blog->status ? 'Ativo' : 'Inativo' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ asset('storage/' . $blog->imagem) }}" alt="Banner" class="h-10">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($blog->slug)
                                <a href="{{ url('blog/'.$blog->slug) }}" target="_blank" class="text-blue-600 hover:underline">Link</a>
                            @else
                                -
                            @endif
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <a href="{{ route('blogs.edit', $blog) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('blogs.destroy', $blog) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:underline">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if($blogs->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">Nenhum post encontrado.</td>
                    </tr>
                @endif
            </tbody>
        </table>

    </div>
</div>
@endsection
