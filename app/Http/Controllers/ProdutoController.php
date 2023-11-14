<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $produtos = Produto::all();

            return view('produtos', ["produtos" => $produtos]);

        }catch (\Exception $e){
            return response()->json(['status' => 0, 'message' => 'Erro ao cadastrar produto.', 'error' => $e]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastrar.produto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Produto::create([
                "nome" => $request['nome'],
                "valor" => $request['valor'],
                "quantidade" => $request['quantidade'],
                "descricao" => $request['descricao']
            ]);

            return response()->json(['status' => 1,'message' => 'Cadastrado com sucesso!']);
        }catch(\Exception $e){
            return response()->json(['status' => 0, 'message' => 'Erro ao cadastrar produto.', 'error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
