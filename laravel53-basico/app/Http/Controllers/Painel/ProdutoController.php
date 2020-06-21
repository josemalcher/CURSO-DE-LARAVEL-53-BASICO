<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Product;
use App\Http\Requests\Painel\ProductFormRequest;

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

        $title = "Listagem de Produtos Controller";

        $products = $product->all();
        return view('painel.products.index', compact('products', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Cadastrar Novo Produto';
        $categories = ['eletronicos', 'moveis', 'limpeza', 'banho']
        ;
        return view('painel.products.create', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormRequest $request) // D.I. (Dependecy injection)
    {
        //dd($request->all());
        //dd($request->only('name'));
        //dd($request->except(['_token', 'descricao-produto']));
        //dd($request->input('name-produto'));


        $dataForm = $request->all();
        //$this->validate($request, $this->product->rules);
        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;
        //$dataForm = $request->except(['_token']);
        //$insert = $this->product->insert($dataForm);

        /*$messages = [
            'name.required'=> "O campo nome é requerido",
            'number.numeric'=> 'Apenas números'
        ];*/

        //$validate = validator($dataForm, $this->product->rules , $messages);


        /*if ($validate->fails()){
            return redirect()
                        ->route('produtos.create')
                        ->withErrors($validate)
                        ->withInput();
        }*/


        $insert = $this->product->create($dataForm);

        if ($insert) {
            return redirect()->route('produtos.index');
        } else {
            return redirect()->route('produtos.create');
        }


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

        $produto = $this->product->find($id);

        $title = "Editar Produto {$produto->name }";
        $categories = ['eletronicos', 'moveis', 'limpeza', 'banho'];

        return view('painel.products.create', compact('title', 'categories', 'produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductFormRequest $request, $id)
    {

        $dataForm = $request->all();

        $dataForm['active'] = (!isset($dataForm['active'])) ? 0 : 1;

        $produto = $this->product->find($id);

        $update = $produto->update($dataForm);

        if($update){
            return redirect()->route('produtos.index');
        }else{
            return redirect()->route('produtos.edit', $id)->with(['error'=> 'Falha ao salvar']);
        }


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
/*
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
*/

        //$prod = $this->product->find(3);
        //$delete = $prod->delete();
        //$prod = $this->product->destroy(3);
        $prod = $this->product->destroy([3,4]);
//        if ($delete) {
//            return "Deletado com sucesso";
//        } else {
//            return "Falha Delete";
//        }

        $delete = $this->product->where('number', '333')->delete();
        if ($delete) {
            return "Deletado com sucesso";
        } else {
            return "Falha Delete";
        }
    }
}
