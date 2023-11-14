<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view de produto</title>
</head>
<body>
    <div class="container">
        <h1>view de produto</h1>
        <form method="post" action="/produtos">
            @csrf <!-- {{ csrf_field() }} -->
            <input type="text" name="nome">
            <input type="number" name="valor">
            <input type="number" name="quantidade">
            <input type="text" name="descricao">
            <input type="submit" value="enviar">
        </form>
    </div>
</body>
</html>