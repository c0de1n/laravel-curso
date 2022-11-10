<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show($nome, $sobrenome) {
        
        return view('test', [
            'nome' => $nome,
            'sobrenome' => $sobrenome
        ]);
    }
}
