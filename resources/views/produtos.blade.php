<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista produtos</title>
</head>
<body>
    <h1>aqui esta todos produtos</h1>

    <table style="border: 1px solid black">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>valor</th>
                <th>quantidade</th>
                <th>descricao</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
            <tr>
                <td>{{$produto->id}}</td>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>{{$produto->descricao}}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
</body>
</html>