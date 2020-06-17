<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Painel\Product;

class ProdutoController extends Controller
{
    private $product;

    /**
     * ProdutoController constructor.
     * @param $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $products = $product->all();
        return view('painel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // D.I. (Dependecy injection)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /* TESTES */
    public function testes()
    {
        /*
        $prod = $this->product;
        $prod->name = 'Produto X1';
        $prod->number = '2';
        $prod->active = true;
        $prod->category = 'eletronicos';
        $prod->description = 'Descição produto x1';

        $insert = $prod->save();
        if ($insert) {
            return "Inserido com sucesso";
        } else {
            return "Falha ao inserir";
        }
        */

        /*$insert = $this->product->create([ // Importante para proteção dos dados gravados
            'name' => 'Nome Pro x3',
            'number' => '3',
            'active' => false,
            'category' => 'eletronicos',
            'description' => 'Desc x3',
        ]);
        if ($insert) {
            return "Inserido com sucesso com CREATE {$insert->id}";
        } else {
            return "Falha ao inserir";
        }*/

        /*
         * UPDATE
        $prod = $this->product->find(5);
        $prod->name = 'Produto X1 Update';
        $prod->number = '2';
        $prod->active = true;
        $prod->category = 'eletronicos';
        $prod->description = 'Update Descição produto x1';
        $insert = $prod->save();
        if ($insert) {
            return "Update com sucesso";
        } else {
            return "Falha Update";
        }
        */

        /*
        $prod = $this->product->find(5);
        $update = $prod->update([
            'name' => 'UPDATE Nome Pro x3',
            'number' => '3',
            'active' => false,
            'category' => 'eletronicos',
            'description' => 'UP Desc x3',
        ]);
        if ($update) {
            return "Update com sucesso";
        } else {
            return "Falha Update";
        }
        */

        $prod = $this->product
                        ->where('number', '=', 333) // ('number', 333)
                        ->update([
                        'name' => 'UPDATE 2 Nome Pro x3',
                        'number' => '333',
                        'active' => false,
                        'category' => 'eletronicos',
                        'description' => 'UP 2 Desc x3',
        ]);
        if ($prod) {
            return "Update com sucesso";
        } else {
            return "Falha Update";
        }

    }
}
