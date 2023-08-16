<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CadastroController extends Controller
{
    protected $redirectTo = '/dashboard';


    public function index()
    {
        // busca todos os cadastros do banco de dados
        $cadastros = Cadastro::all();
        return view('cadastro', compact('cadastros'));    //retona a view com os cadastros


    }

    public function create(Request $request)
    {
        //implementei, pois estava dando erro ao retornar da view erro
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'cpf' => 'required|unique:cadastros,cpf',
        ]);

        if ($validator->fails()) {

            return redirect()->route('error');
        }

        //metodo eloquent ORM

        $existingCadastro = Cadastro::where('cpf', $request->cpf)
            ->orWhere('phone', $request->phone)
            ->first();

        if ($existingCadastro) {
            // aqui voce pode redirecionar de volta ao formulário de erro
            return redirect()->route('error');
        }

        // se não houver duplicatas crie o novo registro
        $newUser = Cadastro::create($request->all());

        if ($newUser) {
            // redirecionar o usuário para a página correta após o cadastro
            return redirect()->intended($this->redirectTo);
        } else {
            // return redirect()->route('error');
        }
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Cadastro $cadastro)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, Cadastro $cadastro)
    {
        //após o update retorna para a dashboard
        // $cadastro->update($request->all());
        // return redirect()->route('dashboard');
    }


    public function destroy(Cadastro $cadastro)
    {
        //
    }
}
