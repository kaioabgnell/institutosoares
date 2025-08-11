<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\PreInscricao;
use Illuminate\Http\Request;

class PreInscricaoController extends Controller
{
    public function index()
    {
        $inscricoes = PreInscricao::with('curso')->latest()->get();
        return view('admin.preinscricoes.index', compact('inscricoes'));
    }

    public function create()
    {
        $cursos = Curso::all();
        return view('admin.preinscricoes.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string',
            'email' => 'required|email',
            'curso_id' => 'required|exists:cursos,id',
            'status' => 'required|boolean',
        ]);

        PreInscricao::create($data);

        return redirect()->route('preinscricoes.index')->with('success', 'Pré-inscrição criada!');
    }

    public function edit(PreInscricao $preinscricao)
    {
        $cursos = Curso::all();
        return view('admin.preinscricoes.edit', compact('preinscricao', 'cursos'));
    }

    public function update(Request $request, PreInscricao $preinscricao)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'telefone' => 'required|string',
            'email' => 'required|email',
            'curso_id' => 'required|exists:cursos,id',
            'status' => 'required|boolean',
        ]);

        $preinscricao->update($data);

        return redirect()->route('preinscricoes.index')->with('success', 'Pré-inscrição atualizada!');
    }

    public function destroy(PreInscricao $preinscricao)
    {
        $preinscricao->delete();
        return redirect()->route('preinscricoes.index')->with('success', 'Pré-inscrição excluída!');
    }
}
