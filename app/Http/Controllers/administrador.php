<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class administrador extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function inserir(Request $Req)
    {
        return \View::make('administrador/inserirFuncionario',["Codigo"=>"1"]);
    }

    public function cadastrar(Request $Req)
    { 
        print_r(dd($Req->all()));
    }

}
