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
        return 'Controller Site';
    }

    public function contato()
    {
        return "Controller página de contato";
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
