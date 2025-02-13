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

    public function consultar()
    {
        $ids = modelAgenda::all();// traz tudo
        return view('paginas.consultar',compact('ids'));
    }//fim do metodo consultar

    public function editar($id)// traz só o reusultado id
    {
        $dado = modelAgenda::findOrFail($id);// guarda só o reusultado id
        return view('paginas.editar',compact('dado'));
    }//fim do metodo editar

    public function atualizar(Request $request,$id)
    {
        modelAgenda::where('id',$id)->update($request->all());
        return redirect('/consultar');
    }//fim do metodo atualizar

    public function excluir(Request $request,$id)
    {
        modelAgenda::where('id',$id)->delete($request->all());
        return redirect('/consultar');
    }//fim do metodo excluir

}//Todas as operações do banco de dados
