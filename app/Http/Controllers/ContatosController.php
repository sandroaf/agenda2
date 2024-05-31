<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatos = Contato::all();
        return view('contatos.index', array('contatos' => $contatos));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contato = new Contato();
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');
        if ($contato->save()) {
            return redirect('contatos');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contato = Contato::find($id);
        return view('contatos.show', array('contato' => $contato));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contato = Contato::find($id);
        return view('contatos.edit', array('contato' => $contato));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contato = Contato::find($id);
        $contato->nome = $request->input('nome');
        $contato->email = $request->input('email');
        $contato->telefone = $request->input('telefone');
        $contato->cidade = $request->input('cidade');
        $contato->estado = $request->input('estado');
        if ($contato->save()) {
            return redirect('contatos');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contato = Contato::find($id);
        if ($contato->delete()) {
            return redirect('contatos');
        }
    }
}
