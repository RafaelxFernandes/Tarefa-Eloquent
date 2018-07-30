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
        return Aluno::find($id);;
    }


    public function createAluno($request){

    }

    public function updateAluno($request, $id){

    }

    public function deleteAluno($id){

    }

    public function destroyAluno($id){

    }

    public function exercicio2($data){

    }

    public function exercicio5(Aluno $aluno){

    }

}
