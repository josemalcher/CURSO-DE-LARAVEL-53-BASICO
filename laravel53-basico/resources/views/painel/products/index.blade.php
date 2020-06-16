<h1>Listagem dos produtos</h1>

<table>
    <tr>
        <td>Nome</td>
        <td>Descrição</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
        </tr>
    @endforeach
</table>