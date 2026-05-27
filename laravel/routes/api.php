<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('teste', function() {});

Route::get('teste', function(){
    return "Hello World";
});

Route::prefix('aluno')->group (function(){
    Route::get('listar', (['App\Http\Controllers\AlunoController', 'listar']));
    Route::get('adicionar', (['App\Http\Controllers\AlunoController', 'listar']));
    Route::get('remove', (['App\Http\Controllers\AlunoController', 'listar']));
    Route::get('criar', (['App\Http\Controllers\AlunoController', 'listar']));

});

Route::prefix('professor')->group (function(){
     Route::get('listar', (['App\Http\Controllers\ProfessorController', 'listar']));
    Route::get('listar', (['App\Http\Controllers\ProfessorController', 'listar']));
    Route::get('adicionar', (['App\Http\Controllers\ProfessorController', 'listar']));
    Route::get('remove', (['App\Http\Controllers\ProfessorController', 'listar']));
    Route::get('criar', (['App\Http\Controllers\ProfessorController', 'listar']));

});