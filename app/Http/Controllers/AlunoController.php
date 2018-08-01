<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Aluno;

class AlunoController extends Controller
{

    public function index()
    {
        $alunos = Aluno::all();
        $alunos = Aluno::withTrashed()->get();
        //$alunos = Aluno::onlyTrashed()->get();
        
        return view('alunos',['alunos' => $alunos]);
    }


    public function insereAluno(Request $request)
    {
        $novo_aluno = new Aluno;
        $novo_aluno->createAluno($request);
        
        return back();
    }


    public function atualizaAluno(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->updateAluno($request);

        return back();
    }

    public function deletaAluno($id)
    {
        Aluno::destroy($id);
        return back();
    }


    //exemplo de como chamar uma função da model
    public function getAluno(Request $request){

        $aluno = new Aluno;
        $resposta = $aluno->exemplo($request->id);

        dd($resposta); // comentar essa linha na segunda parte dos exercicios.
        return back();

    }
}
