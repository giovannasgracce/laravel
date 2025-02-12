<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelAgenda;

class registrarAtividadeController extends Controller
{
    public function index(){
        $dados = modelAgenda::all();//trazendo todos os dados da tabela
        return view('paginas.cadastrar')->With('dados',$dados);
    }  //fim do método

    public function store(Request $request){
        $data = $request->input('dataEvento');
        $descricao = $request->input('descricaoTexto');
        //Inserindo os dados da tabela 
        $model = new modelAgenda();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//Armazenar no banco
        return redirect('/cadastrar');
    }//fim do metodo cadastrar
}//Todas as operações do banco de dados
