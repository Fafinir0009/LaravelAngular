<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function listar (){
        return response()->json([
            ["nome"=>"Diogo", 'rm'=>123],
            ["nome"=>"Ana", 'rm'=>1234],
            ["nome"=>"Ingrid", 'rm'=>12345],
        ]);
    }
}
