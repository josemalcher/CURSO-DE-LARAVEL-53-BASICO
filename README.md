# CURSO DE LARAVEL 5.3 - BÁSICO

https://academy.especializati.com.br/curso/laravel-53-basico-gratis

CURSO BÁSICO PARA QUEM ESTÁ COMEÇANDO NO MUNDO LARAVEL E QUER DESFRUTAR DESTE INCRÍVEL E PODEROSO FRAMEWORK PHP. NESTE CURSO INTRODUZIMOS OS CONCEITOS DO FRAMEWORK ATÉ A CRIAÇÃO COMPLETA DO NOSSO PRIMEIRO CRUD.

## <a name="indice">Índice</a>

1. [Instalando o Laravel 5.3](#parte1)     
2. [Estrutura de Pastas do Laravel 5.3](#parte2)     
3. [Criar VirtualHost](#parte3)     
4. [Rotas Laravel 5.3](#parte4)     
5. [Rotas Final Laravel 5.3](#parte5)     
6. [Controllers Laravel 5.3](#parte6)     
7. [Controllers Resource Laravel 5.3](#parte7)     
8. [Views Laravel 5.3](#parte8)     
9. [Sistema de Template Blade Laravel 5.3](#parte9)     
10. [Sistema de Template Blade Laravel 5.3 Parte 2](#parte10)     
11. [Blade stacks](#parte11)     
12. [Migrations Laravel 5.3](#parte12)     
13. [Migration Refresh Laravel 5.3](#parte13)     
14. [Seeders](#parte14)     
15. [Models Laravel 5.3](#parte15)     
16. [Primeiro Cadastro no Banco de Dados Laravel 5.3](#parte16)     
17. [Update Laravel 5.3](#parte17)     
18. [Delete Laravel 5.3](#parte18)     
19. [Melhorar a Listagem dos Itens no Laravel (CSS e Bootstrap)](#parte19)     
20. [Formulários no Laravel 5.3](#parte20)     
21. [Requests Laravel 5.3](#parte21)     
22. [Cadastrar Dados do Formulário no Laravel 5.3](#parte22)     
23. [Validação de dados no Laravel 5.3](#parte23)     
24. [Personalizar Mensagens de Erros (Validação)](#parte24)     
25. [Form Request Validation no Laravel](#parte25)     
26. [Preparando para editar dados no Laravel](#parte26)     
27. [Update dados laravel no Laravel 5.3](#parte27)     
28. [Pacote Collective Form and HTML no Laravel](#parte28)     
29. [Deletar Dados no Laravel](#parte29)     
30. [Paginação](#parte30)     
---


## <a name="parte1">1 - Instalando o Laravel 5.3 </a>

- https://laravel.com/docs/5.3

```
composer create-project --prefer-dist laravel/laravel laravel53-basico "5.3.*"
```

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - Estrutura de Pastas do Laravel 5.3 </a>

- https://laravel.com/docs/5.3/structure

[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - Criar VirtualHost </a>



[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - Rotas Laravel 5.3 </a>

- https://laravel.com/docs/5.3/routing

```php

Route::get('/nome/nome1/nome2/nome3', function (){
    return "Rota Grande";
})->name('rota.nomeada');

Route::any('/any', function (){
    return 'Route Any';
});

Route::match(['get', 'post'],'/match', function (){
   return 'Router Match';
});

Route::post('/post', function (){
    return "Route Post"; // ideal para form's
});

Route::get('/contato', function (){
    return 'Contato';
});

Route::get('/empresa', function (){
    return view('empresa');
});

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return redirect()->route('rota.nomeada');
});
```

[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Rotas Final Laravel 5.3 </a>

```php

Route::get('/categoria/{idCat}/nome-fixo/{param2}', function ($idCat, $param2){
    return "Post da Categoria {$idCat} e {$param2}";
});

Route::get('/categoria2/{idCat?}', function ($idCat = "Nenhuma"){
    return "Post da Categoria {$idCat}";
});

//Grupos de Rote

Route::group(['prefix'=>'painel', 'middleware'=> 'auth'], function (){
    Route::get('grupo1', function (){
        return "GRupo 1";
    });
    Route::get('grupo2', function (){
        return "GRupo 2";
    });
    Route::get('/', function (){
        return 'Dashboard';
    });
});

Route::get('/login', function (){
    return "#form login";
});


```

[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - Controllers Laravel 5.3 </a>

```
php artisan make:controller Painel\\PainelController
```

```php
<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
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

```

```php
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 Route::get('/', 'Site\SiteController@index');
Route::get('/contato', 'Site\SiteController@contato');

Route::get('/categoria/{id}', 'Site\SiteController@categoria');
Route::get('/categoria2/{id?}', 'Site\SiteController@categoriaOp');
*/

Route::group(['namespace'=>'Site'], function (){
    Route::get('/', 'SiteController@index');
    Route::get('/contato', 'SiteController@contato');

    Route::get('/categoria/{id}', 'SiteController@categoria');
    Route::get('/categoria2/{id?}', 'SiteController@categoriaOp');
});


```

[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - Controllers Resource Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - Views Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - Sistema de Template Blade Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - Sistema de Template Blade Laravel 5.3 Parte 2 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - Blade stacks </a>



[Voltar ao Índice](#indice)

---


## <a name="parte12">12 - Migrations Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte13">13 - Migration Refresh Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte14">14 - Seeders </a>



[Voltar ao Índice](#indice)

---


## <a name="parte15">15 - Models Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte16">16 - Primeiro Cadastro no Banco de Dados Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte17">17 - Update Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte18">18 - Delete Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte19">19 - Melhorar a Listagem dos Itens no Laravel (CSS e Bootstrap) </a>



[Voltar ao Índice](#indice)

---


## <a name="parte20">20 - Formulários no Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte21">21 - Requests Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte22">22 - Cadastrar Dados do Formulário no Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte23">23 - Validação de dados no Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte24">24 - Personalizar Mensagens de Erros (Validação) </a>



[Voltar ao Índice](#indice)

---


## <a name="parte25">25 - Form Request Validation no Laravel </a>



[Voltar ao Índice](#indice)

---


## <a name="parte26">26 - Preparando para editar dados no Laravel </a>



[Voltar ao Índice](#indice)

---


## <a name="parte27">27 - Update dados laravel no Laravel 5.3 </a>



[Voltar ao Índice](#indice)

---


## <a name="parte28">28 - Pacote Collective Form and HTML no Laravel </a>



[Voltar ao Índice](#indice)

---


## <a name="parte29">29 - Deletar Dados no Laravel </a>



[Voltar ao Índice](#indice)

---


## <a name="parte30">30 - Paginação </a>



[Voltar ao Índice](#indice)

---

