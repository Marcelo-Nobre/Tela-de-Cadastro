<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{


    public function index()
    {
        $cadastros = Cadastro::all(); // Busca todos os cadastros do banco de dados
        return view('dashboard', compact('cadastros'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        // Busca o cadastro pelo ID fornecido
        $cadastro = Cadastro::findOrFail($id);
        return view('edit', compact('cadastro'));
    }


    public function update(Request $request, Cadastro $cadastro)
    {
        //após o update retorna para a dashboard
        $cadastro->update($request->all());
        return redirect()->route('dashboard');
    }


    public function destroy(Cadastro $cadastro)
    {
        $cadastro->delete();
        return redirect()->route('dashboard')->with('success', 'Cadastro excluído com sucesso.');
    }
}
