<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $pedidos = Pedido::all();

            return view('pedidos', ["pedidos" => $pedidos]);

        }catch (\Exception $e){
            return response()->json(['status' => 0, 'message' => 'Erro ao acessar a rota', 'error' => $e]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'tem que criar a view de cadastrar pedido';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Pedido::create([
                "produto_id" => $request['produto_id'],
                "observacao" => $request['observacao'],
            ]);

            return response()->json(['status' => 1,'message' => 'Cadastrado com sucesso!']);
        }catch(\Exception $e){
            return response()->json(['status' => 0, 'message' => 'Erro ao cadastrar pedido.', 'error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = Pedido::find($id);

        try{
            if(!$pedido)
                return response()->json(['status' => 1, 'message' => 'Pedido não encontrado']);
            
            return response()->json(['status' => 1, 'message' => 'Pedido encontrado', 'dados' => $pedido]);
        }catch(\Exception $e){
            return response()->json(['status' => 0, 'message' => 'Erro a rota', 'error' => $e->getMessage()]);
        }        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
