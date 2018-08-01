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
        
        $novo_aluno = new Aluno;

        $novo_aluno->registro = $request->registro;
        $novo_aluno->nome = $request->nome;
        $novo_aluno->serie = $request->serie;
        $novo_aluno->turma = $request->turma;
        $novo_aluno->media = $request->media;
        $novo_aluno->faltas = $request->faltas;

        $novo_aluno->save();
        return response()->json(['Aluno criado com sucesso']);
    }

    public function updateAluno($request){

        if(!$this->registro){
             $this->registro = $request->registro;
        }

        $this->nome = $request->nome;
        $this->serie = $request->serie;
        $this->turma = $request->turma;
        $this->media = $request->media;
        $this->faltas = $request->faltas;

        $this->save();
        return response()->json(['Aluno atualizado com sucesso']);
    }

    public function deleteAluno($id){

        $this->delete();
        return response()->json(['Aluno deletado com sucesso']);
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

     public function alteraAluno($request){
        
         if(!$this->registro){
             $this->registro = $request->registro;
         }

         $this->nome = $request->nome;
         $this->turma = $request->turma;
         $this->serie = $request->serie;
         $this->media = $request->media;
         $this->faltas = $request->faltas;
        
         $this->save();
     }

}
