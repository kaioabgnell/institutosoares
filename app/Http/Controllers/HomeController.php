<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Curso;
use App\Models\Voluntariosdoacoes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{

    public function index($returnArr = false)
    {
        $seo = [
            'title' => 'Instituto Soares',
            'description' => null,
            'favicon' => null
        ];

        $banners = Banner::where('status', 1)->limit(5)->get();
        $cursos = Curso::where('status', 1)->limit(10)->get();
        $blogs = Blog::where('status', 1)->limit(4)->get();

        return view('site.home', compact('seo','banners','cursos','blogs'));
    }


    public function storeDoacao(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
            'tipo' => 'nullable|int',
        ]);

        $data['observacao'] = $data['message'] ?? null;
        $data['status'] = true; // ou false, dependendo do seu padrão
        $data['tipo'] = $data['tipo'];
        $data['created_at'] = now();

        // Salvar na tabela voluntariosdoacoes
        Voluntariosdoacoes::create([
            'nome' => $data['name'],
            'telefone' => $data['phone'],
            'email' => $data['email'],
            'observacao' => $data['observacao'],
            'status' => $data['status'],
            'tipo' => $data['tipo'],
            'created_at' => $data['created_at'],
        ]);

        if($data['tipo'] == 1){
            return redirect('/voluntario')->with('success', 'Obrigado pelo seu interesse, em breve entraremos em contato.');
        } elseif($data['tipo'] == 2){
            return redirect('/')->with('success', 'Obrigado pelo seu interesse, em breve entraremos em contato.');
        } elseif($data['tipo'] == 3){
            return redirect('/contatos')->with('success', 'Obrigado pelo seu interesse, em breve entraremos em contato.');
        }
        
    }


}
