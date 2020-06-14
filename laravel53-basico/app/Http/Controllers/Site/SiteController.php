<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{

    /**
     * SiteController constructor.
     */
    public function __construct()
    {
        // $this->middleware('auth'); // todos os métodos

        /*
         $this->middleware('auth')   // alguns métodos
            -> only([
               'contato',
               'categoria'
            ]);
        */

        /*
        $this->middleware('auth')
            ->except(['index', 'contato']);
        */

    }

    public function index()
    {
//        $teste = 123;
//        $teste2 = "Um dois Três";

        //$xss = '<script>alert("atack XSS")</script>';

        $var1 = 0;

        $arrayData = [2,3,4,5,67,1,2];

        /*return view('teste', ['teste'=> $teste]);*/
        return view('site.home.index', compact(   'var1','arrayData'));
    }

    public function contato()
    {
        return view('site.contato.index');
    }

    public function categoria($id)
    {
        return "Categoria {$id}";
    }

    public function categoriaOp($id = "Sem Categoria")
    {
        return "Categoria {$id}";
    }
}
