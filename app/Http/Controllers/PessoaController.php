<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \App\Pessoa;

class PessoaController extends Controller
{
    //
    public function index(){

      //  $pessoas = Pessoa::all();
      $pessoas = auth()->user()->pessoas;

        return view('pessoa.index',compact('pessoas'));
    }

    public function create(){

        return view('pessoa.create');
}

    public function store(Request $request){

        // $pessoa = new \App\Pessoa();

        // $pessoa->nome = $request->nome ;
        // $pessoa->telefone = $request->telefone;
        // $pessoa->email = $request->email;

        // $pessoa->save();

      //$pessoas = Pessoa::create($request->all());
    //   $pessoas = Pessoa::create([
    //     'nome' => $request->nome,
    //     'telefone' => $request->telefone,
    //     'email' => $request->email,
    //     'user_id' => auth()->user()->id,
    // ]);
    auth()->user()->pessoas()->create($request->all());
        return redirect('/pessoas');
    }
    public function edit(Pessoa $pessoa){


        return view ('pessoa.create', compact('pessoa'));


    }
    public function show(Pessoa $pessoa){

        return view('pessoa.show', compact('pessoa'));
    }

    public function update(Request $request, \App\Pessoa $pessoa){

       $pessoa->update($request->all());
       return redirect ('/pessoas');
    }

    public function destroy(Pessoa $pessoa){

        $pessoa->delete();
        return redirect ('/pessoas');
     }
 

}
