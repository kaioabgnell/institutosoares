@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-between mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Voluntários -->
            <div class="bg-white shadow rounded p-6">
                <h3 class="text-lg font-semibold text-gray-700">Voluntários</h3>
                <p class="mt-2 text-3xl text-[#045056] font-bold">{{ $totalVoluntarios }}</p>
            </div>

            <!-- Doações -->
            <div class="bg-white shadow rounded p-6">
                <h3 class="text-lg font-semibold text-gray-700">Doações</h3>
                <p class="mt-2 text-3xl text-[#b0b002] font-bold">{{ $totalDoacoes }}</p>
            </div>

            <!-- Contatos -->
            <div class="bg-white shadow rounded p-6">
                <h3 class="text-lg font-semibold text-gray-700">Contatos</h3>
                <p class="mt-2 text-3xl text-[#990000] font-bold">{{ $totalContatos }}</p>
            </div>
        </div>

    </div>
</div>
@endsection
