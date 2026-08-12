<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function listar (){
        return response()->json([
            ["nome"=>"Ana", 'rm'=>123],
            ["nome"=>"Davi", 'rm'=>1234],
            ["nome"=>"Katlyn", 'rm'=>12345],
        ]);
    }
    function adicionar (){

    }
    function remove (){

    }
    function update (){

    }
}
