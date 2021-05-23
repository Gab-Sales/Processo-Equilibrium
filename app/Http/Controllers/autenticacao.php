<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class autenticacao extends Controller
{
    public function login(Request $Req)
    { 
        if(strtolower ($Req->input('username')) == 'admin' && $Req->input('password') == 123){
            session(['logado'=>true]);
            return redirect('home');
        }
        else{
            Session::flash('msg', 'Usuário ou Senha invalidos.');
            Session::flash('class', 'alert alert-danger');
            return redirect('/');
        }
    }

    public function logout()
    { 
        session(['logado'=>false]);
        return redirect('/');
    }

}


