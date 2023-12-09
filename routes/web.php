<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestorController;

Route::get('/',[GestorController::class,'index'])->name('index');

//cadastrar gestor
Route::get('/cadgestor',[GestorController::class,'mostrarFormGestor'])->name("form-cadastro-gestor");
Route::post('/cadgestor',[GestorController::class,'cadastroGestor'])->name("cadastro-gestor");

//visualizar
Route::get('/visualizagestor',[GestorController::class,'mostrarGestor'])->name("form-view-gestor");

//alterar categoria
Route::get('/alterargestor/{registrosGestor}',[GestorController::class,'mostrarAlterar'])->name('form-alterar-gestor');
Route::put('/alterargestor/{registrosGestor}',[GestorController::class,'executaAlterar'])->name('alterar-gestor');

//apagar categoria
Route::get('/deletargestor',[GestorController::class,'mostrarDeleteGestor'])->name('form-deletar-gestor');
Route::delete('/deletargestor/{registrosGestor}',[GestorController::class,'deleteGestor'])->name('deletar-categoria');