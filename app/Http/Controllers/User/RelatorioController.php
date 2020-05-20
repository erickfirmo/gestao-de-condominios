<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Relatorio;

class RelatorioController extends Controller
{
    public function index()
    {
        $relatorios = Relatorio::all();
        return view('admin.relatorios.index', [ 'relatorios' => $relatorios ]);
    }

    public function store(array $request)
    {
        $relatorio = new Relatorio;
        $relatorio->descricao = $request['descricao'];
        $relatorio->operacao = $request['operacao'];
        $relatorio->user_id = $request['user_id'];
        $relatorio->parent_id = $request['parent_id'];
        $relatorio->parent_table = $request['parent_table'];
        $relatorio->save();
    }
}
