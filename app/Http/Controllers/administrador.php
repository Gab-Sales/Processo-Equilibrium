<?php

namespace App\Http\Controllers;

use App\Models\funcionarios;
use App\Models\funcionario_telefone;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Session;

class administrador extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getFuncionarios()
    {   
        $users = funcionarios::all();
        return \View::make('administrador/funcionariosGrid',['ret'=>$users]);
    }

    public function inserir(Request $Req)
    {   
        if($Req->input('Codigo')){
            $ret=funcionarios::where('Codigo',$Req->input('Codigo'))->first();
            $ret['contatos']= funcionario_telefone::where('Funcionario',$Req->input('Codigo'))->get();
            return \View::make('administrador/inserirFuncionario',['ret'=>$ret]);
            die;
        }
        return \View::make('administrador/inserirFuncionario');
    }

    public function cadastrar(Request $Req)
    { 
        if($Req->input('Codigo')){  
            $CodView = $Req->input('Codigo');       
            funcionarios::where('Codigo',$CodView)->update(['CPF'=>$Req->CPF,'Nome'=>$Req->Nome,'CTPS'=>$Req->CTPS,'Setor'=>$Req->Setor]);      
            if($Req->input('Telefone') && count($Req->input('Telefone'))>0){
                foreach($Req->input('Telefone') as $val){
                    if($val['cod'] > 0){    
                        funcionario_telefone::where('Codigo',$val['cod'])->update(['Telefone'=>$val['tel']]);
                    }
                    else{
                        $data = ['Funcionario'=>$CodView,'Telefone'=>$val['tel']];
                        funcionario_telefone::create($data);
                    }
                }
            }                          
            Session::flash('msg', 'Cadastro Atualizado com Sucesso!!');
            Session::flash('class', 'alert alert-success');
        }else{
            $verify = funcionarios::where('CPF',$Req->input('CPF'))->count();
            if($verify>0){
                Session::flash('msg', 'Já existe um funcionario cadastrado com este CPF.');
                Session::flash('class', 'alert alert-danger');
                return redirect('inserir');   
                die;
            }
            $data = $Req->only('CPF','Nome','CTPS','Setor');        
            funcionarios::create($data);
            $temp = funcionarios::where('CPF',$Req->input('CPF'))->first();
            $CodView = $temp->Codigo;
            if($Req->input('Telefone') && count($Req->input('Telefone'))>0){
                foreach($Req->input('Telefone') as $val){
                    $data = ['Funcionario'=>$CodView,'Telefone'=>$val['tel']];
                    funcionario_telefone::create($data);
                }
            }
            Session::flash('msg', 'Cadastro Realizado com Sucesso!!');
            Session::flash('class', 'alert alert-success');                
        }
        return redirect('inserir/?Codigo='.$CodView);  
    }

    public function excluir($Codigo){
        $del = funcionarios::find($Codigo)->delete();
        Session::flash('msg', 'Funcionario excluido com Sucesso!!');
        Session::flash('class', 'alert alert-success');
        return redirect('funcionarios');
    }
}
