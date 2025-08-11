<?php

namespace App\Http\Controllers;

use App\Models\Voluntariosdoacoes;
use Illuminate\Http\Request;

class VoluntariosdoacoController extends Controller
{
    public function index()
    {
        $registros = Voluntariosdoacoes::latest()->get();
        return view('admin.voluntariosdoacoes.index', compact('registros'));
    }

    public function create()
    {
        return view('admin.voluntariosdoacoes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'observacao' => 'nullable',
            'status' => 'required|boolean',
            'tipo' => 'required|in:1,2',
        ]);

        Voluntariosdoacoes::create($data);

        return redirect()->route('voluntariosdoacoes.index')->with('success', 'Registro criado com sucesso!');
    }

    public function edit(Voluntariosdoacoes $voluntariosdoaco)
    {
        return view('admin.voluntariosdoacoes.edit', compact('voluntariosdoaco'));
    }

    public function update(Request $request, Voluntariosdoacoes $voluntariosdoaco)
    {
        $data = $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'observacao' => 'nullable',
            'status' => 'required|boolean',
            'tipo' => 'required|in:1,2',
        ]);

        $voluntariosdoaco->update($data);

        return redirect()->route('voluntariosdoacoes.index')->with('success', 'Registro atualizado com sucesso!');
    }

    public function destroy(Voluntariosdoacoes $voluntariosdoaco)
    {
        $voluntariosdoaco->delete();
        return redirect()->route('voluntariosdoacoes.index')->with('success', 'Registro excluído com sucesso!');
    }
}
