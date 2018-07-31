<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    // Configuração do softDeletes
    use softDeletes;
    protected $dates = ['deleted_at'];
    //-----------------------------------------------------------------

    protected $guarded = [];

    //-----------------------------------------------------------------
    //exemplo de função
    public function exemplo($id){
       $resposta = 'insira o seu codigo aqui';
        return $resposta;
    }


    public function createAluno($request){

    }

    public function updateAluno($request, $id){

    }

    public function deleteAluno($id){

    }

    // public function exemplo1($id){
    //     $alunos = Aluno::orderBy('nome', 'asc')->get();
    //     // $alunos = $alunos->getContent();
    //     $ordenados = [];
    //     foreach($alunos as $aluno){
    //         array_push($ordenados, $aluno->nome);
    //     }
    //     return $ordenados;
    // }

    // public function alteraAluno($request){
        
    //     if(!$this->registro){
    //         $this->registro = $request->registro;
    //     }
    //     $this->nome = $request->nome;
    //     $this->turma = $request->turma;
    //     $this->serie = $request->serie;
    //     $this->media = $request->media;
    //     $this->faltas = $request->faltas;
        
    //     $this->save();
    // }

}
