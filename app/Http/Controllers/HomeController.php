<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Hobbie;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::orderBy('id', 'desc')->get();

        $estado = Cidade::with('estado')->get();

       return view('home.index', compact('pessoas'));
    }

    public function create()
   {
    $hobbies = Hobbie::pluck('nome');
    $estados = Estado::all();
    $cidades = Cidade::all();
    return view('pessoa.index', compact('hobbies', 'estados', 'cidades'));
   }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'hobbie' => 'required',
        ]);

        Pessoa::create($request->post());

        return redirect()->route('index')->with('success','Cadastro realizado com sucesso!');
    }

    public function edit(Pessoa $pessoa)
    {
        $hobbies = Hobbie::pluck('nome');
        $estados = Estado::all();
        $cidades = Cidade::all();
        $pessoa = Pessoa::all()->find($pessoa);
        return view('pessoa.edit',compact('pessoa', 'hobbies', 'estados', 'cidades'));
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'hobbie' => 'required',
        ]);

        $pessoa->fill($request->post())->save();

        return redirect()->route('index')->with('success','Pessoa editada com sucesso!');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('index')->with('success','Pessoa excluida com sucesso!');
    }
}
