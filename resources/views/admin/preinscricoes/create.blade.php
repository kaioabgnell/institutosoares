@extends('layouts.app')

@section('content')
<div class="py-12 max-w-xl mx-auto sm:px-6 lg:px-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Criar Pré Inscrição</h2>

    @if ($errors->any())
    <div class="mb-4 text-red-600">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('preinscricoes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admin.preinscricoes._form')
        <div class="flex justify-between mt-6">
            <a href="{{ route('preinscricoes.index') }}" class="text-gray-600 hover:underline">Cancelar</a>
            <button type="submit" class="bg-[#045056] hover:bg-[#034049] text-white px-4 py-2 rounded">Salvar</button>
        </div>
    </form>
</div>
@endsection
