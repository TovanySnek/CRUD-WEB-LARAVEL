<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function listar()
    {
        require __DIR__ . '/../conectar_banco.php';

        $produtos = $pdo->query('SELECT * FROM produto;')->fetchAll(\PDO::FETCH_ASSOC);

        require __DIR__ . "/../View/Produto/listar.php";
        
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Produto::create([
            'nome' => '1'


        ]);

        dd(Produto::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
