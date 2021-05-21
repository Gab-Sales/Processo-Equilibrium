<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autenticacao extends Controller
{
    public function login(Request $Req)
    { 
        //print_r(dd($Req->all()));
        session(['logado'=>true]);
        //print_r(session()->all());
        return redirect('home');
    }
}


