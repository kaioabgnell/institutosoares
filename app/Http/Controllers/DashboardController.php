<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voluntariosdoacoes;


class DashboardController extends Controller
{
    public function index()
    {
        $totalVoluntarios = Voluntariosdoacoes::where('tipo', 1)->count();
        $totalDoacoes = Voluntariosdoacoes::where('tipo', 2)->count();
        $totalContatos = Voluntariosdoacoes::where('tipo', 3)->count();

        return view('dashboard', compact('totalVoluntarios', 'totalDoacoes', 'totalContatos'));
    }
}
