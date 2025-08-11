<?php
namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\PreInscricao;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::latest()->get();
        return view('admin.cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('admin.cursos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'status' => 'required|boolean',
            'imagem' => 'nullable|image',
        ]);
        
        $data['url'] = Str::slug($data['nome']);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('cursos', 'public');
        }

        Curso::create($data);

        return redirect()->route('cursos.index')->with('success', 'Curso criado com sucesso!');
    }

    public function edit(Curso $curso)
    {
        return view('admin.cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'status' => 'required|boolean',
            'imagem' => 'nullable|image',
        ]);
        
        $data['url'] = Str::slug($data['nome']);

        if ($request->hasFile('imagem')) {
            $data['imagem'] = $request->file('imagem')->store('cursos', 'public');
        }

        $curso->update($data);

        return redirect()->route('cursos.index')->with('success', 'Curso atualizado com sucesso!');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso excluído!');
    }

    public function siteIndex()
    {

        $seo = [
            'title' => 'Instituto Soares',
            'description' => null,
            'favicon' => null
        ];

        $cursos = Curso::where('status', 1)->orderBy('id', 'ASC')->paginate(20);

        return view('site.cursos', compact('seo','cursos'));


    }

    public function siteCourse($url = false)
    {

        if($url){
            redirect('/');
        }

        $curso = Curso::where('url', $url)->first();

        $seo = [
            'title' => 'Instituto Soares',
            'description' => null,
            'favicon' => null
        ];

        return view('site.curso', compact('seo','curso'));
    }


    public function preinscricaoInscricao(Request $request)
    {

       
       PreInscricao::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'curso_id' => $request->input('curso_id'),
            'created_at' => now(),
            'status' => 1,
        ]);

        

        return redirect('/curso/' . $request->input('url'))->with('success', 'Obrigado pelo seu interesse, em breve entraremos em contato.');
    }



}
