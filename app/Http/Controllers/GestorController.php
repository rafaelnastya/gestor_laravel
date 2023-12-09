<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Gestor;

class GestorController extends Controller
{
    public function index(){
        return view('index');
    }

//cadastrar
    public function mostrarFormGestor(){
        return view('cadastra_gestor');
    }

    public function cadastroGestor(Request $request)
    {
        $registrosGestor = $request->validate([
            'id' => 'numeric|required',
            'nometarefa' => 'string|required',
            'horario' => 'numeric|required',
            'duracao' => 'numeric|required'
        ]);
    Gestor::create($registrosGestor);
    return Redirect::route('index');
    }

//apagar
    public function mostrarDeleteGestor()
    {
        return view('deleta_gestor');
        return Redirect::route('index');
    }
    public function deleteGestor(Gestor $registrosGestor)
    {
        $registrosGestor->delete();
        return Redirect::route('index');
    }

    
//alterar
    public function mostrarAlterarGestor(Gestor $registrosGestor)
    {
        return view('altera_gestor',['registrosGestor' => $registrosGestor]);
    }
    public function alterarGestor(Gestor $registrosGestor, Request $request)
    {
        $registrosGestor = $request->validate([
            'nometarefa' => 'string|required',
            'horario' => 'numeric|required',
            'duracao' => 'numeric|required'
        ]);
        $registrosGestor->fill($registrosGestor);
        $registrosGestor->save();
        return Redirect::route('index');
    }

//visualizar
    public function mostrarGestor()
    {
        $registrosGestor = Gestor::All();

        return view('manipula_curso',['registrosGestor' => $registrosGestor]);
    }
}
