<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista pedidos</title>
</head>
<body>
    <h1>aqui esta todos pedidos</h1>

    <table style="border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>produto_id</th>
                <th>status</th>
                <th>observacao</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{$pedido->id}}</td>
                <td>{{$pedido->produto_id}}</td>
                <td>{{$pedido->status}}</td>
                <td>{{$pedido->observacao}}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>